<?php

namespace ngsadmin\actions\export {

    use ngs\framework\AbstractAction;
    use ngsadmin\managers\SkinProblemManager;
    use ngsadmin\security\RequestGroups;

    class ExportOrderHistoryAction extends AbstractAction {

        public function service() {
            $args = array();
            if (NGS()->args()->getSorting()) {
                $args["order_by"] = NGS()->args()->getSorting();
            }
            if (NGS()->args()->getOrdering()) {
                $args["sort_by"] = NGS()->args()->getOrdering();
            }
            $args['limit']=50000;
            $orderHistoryDtos = \ngsadmin\managers\OrderHistoryManager::getInstance()->getOrderHistory($args);
            $this->outputCsv($orderHistoryDtos);
        }

        public function outputCsv($items) {
            $csvData = array();
            $csvData[0] = array('Id', 'Pharmacy Name', 'User Name', 'Product Name', 'Purchase', 'Wishlist', 'Order Date', 'Added Date');
            $index = 1;
            foreach ($items as $item) {

                $csvData[$index][] = $item->getId();
                $csvData[$index][] = $item->getPharmacyName();
                $csvData[$index][] = $item->getUserName();
                $csvData[$index][] = $item->getProductName();
                $csvData[$index][] = $item->getPurchase();
                $csvData[$index][] = $item->getWishlist();
                $csvData[$index][] = $item->getOrderDate();
                $csvData[$index][] = $item->getAddedDate();
                $index++;
            }


            $fileName = 'export_order_history_' . date("Y_m_d_H_i_s") . '.csv';
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename=' . $fileName);

            $outstream = fopen("php://output", "w");
            foreach ($csvData as $rowData) {
                fputcsv($outstream, $rowData);
            }
            fclose($outstream);
            exit;
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
