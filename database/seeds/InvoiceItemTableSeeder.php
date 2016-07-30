<?php

use fooCart\Core\Models\InvoiceItem;
use Illuminate\Database\Seeder;

class InvoiceItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoiceItems = [
            //Invoice 1
            //Shipment 1
            [ //tax, quantity > 1, amount promo
                'sku' => 'FC-HDTV00000001',
                'manufacturer' => 'Acme',
                'type_id' => 1,
                'shipment_id' => 1,
                'invoice_id' => 1,
                'name' => '27" HD Television',
                'quantity' => 2,
                'unit_price' => 250.00,
                'weight' => 100,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 1,
                'tax_id' => 3,
                'shipping_total' => 60.10,
                'shipping_option_id' => 2
            ],
            //Shipment 1
            [ //tax, quantity > 1, percentage promo
                'sku' => 'FC-HDTV00000002',
                'manufacturer' => 'Acme',
                'type_id' => 1,
                'shipment_id' => 1,
                'invoice_id' => 1,
                'name' => '32" HD Television',
                'quantity' => 2,
                'unit_price' => 300.00,
                'weight' => 120,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 4,
                'tax_id' => 3,
                'shipping_total' => 68.00,
                'shipping_option_id' => 2
            ],
            //Shipment 2
            [ //tax, quantity > 1, no promo
                'sku' => 'FC-HDTV00000003',
                'manufacturer' => 'Acme',
                'type_id' => 1,
                'shipment_id' => 2,
                'invoice_id' => 1,
                'name' => '52" HD Television',
                'quantity' => 2,
                'unit_price' => 450.00,
                'weight' => 120,
                'weight_measurement' => 'lbs',
                'promo_code_id' => null,
                'tax_id' => 3,
                'shipping_total' => 44.29,
                'shipping_option_id' => 1
            ],

            //Invoice 2
            //Shipment 3
            [ //tax, quantity = 1, amount promo
                'sku' => 'FC-PC0000000001',
                'manufacturer' => 'Virtucon',
                'type_id' => 1,
                'shipment_id' => 3,
                'invoice_id' => 2,
                'name' => '4GB RAM, i5 2.2Ghz',
                'quantity' => 1,
                'unit_price' => 250.00,
                'weight' => 22,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 2,
                'tax_id' => 3,
                'shipping_total' => 28.62,
                'shipping_option_id' => 4
            ],
            //Shipment 3
            [ //tax, quantity = 1, percentage promo
                'sku' => 'FC-PC0000000004',
                'manufacturer' => 'Virtucon',
                'type_id' => 1,
                'shipment_id' => 3,
                'invoice_id' => 2,
                'name' => '8GB RAM, i5 4Ghz',
                'quantity' => 1,
                'unit_price' => 300.00,
                'weight' => 22,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 5,
                'tax_id' => 1,
                'shipping_total' => 24.77,
                'shipping_option_id' => 4
            ],

            //Invoice 3
            //Shipment 4
            [ //tax, quantity = 1, no promo
                'sku' => 'FC-PC0000000005',
                'manufacturer' => 'Virtucon',
                'type_id' => 1,
                'shipment_id' => 4,
                'invoice_id' => 3,
                'name' => '16GB RAM i7 4.2Ghz',
                'quantity' => 1,
                'unit_price' => 450.00,
                'weight' => 22,
                'weight_measurement' => 'lbs',
                'promo_code_id' => null,
                'tax_id' => 3,
                'shipping_total' => 42.18,
                'shipping_option_id' => 6
            ],
            //Shipment 4
            [ //tax, quantity = 1, percentage promo
                'sku' => 'FC-PC0000000006',
                'manufacturer' => 'Virtucon',
                'type_id' => 1,
                'shipment_id' => 4,
                'invoice_id' => 3,
                'name' => '8GB RAM, i5 4Ghz',
                'quantity' => 1,
                'unit_price' => 300.00,
                'weight' => 22,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 5,
                'tax_id' => 3,
                'shipping_total' => 52.10,
                'shipping_option_id' => 6
            ],
            //Shipment 5
            [ //tax, quantity > 1, amount promo
                'sku' => 'FC-HDTV00000007',
                'manufacturer' => 'Acme',
                'type_id' => 1,
                'shipment_id' => 5,
                'invoice_id' => 3,
                'name' => '27" HD Television',
                'quantity' => 2,
                'unit_price' => 250.00,
                'weight' => 100,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 1,
                'tax_id' => 3,
                'shipping_total' => 54.19,
                'shipping_option_id' => 4
            ],
            //Shipment 5
            [ //tax, quantity > 1, percentage promo
                'sku' => 'FC-HDTV00000008',
                'manufacturer' => 'Acme',
                'type_id' => 1,
                'shipment_id' => 5,
                'invoice_id' => 3,
                'name' => '32" HD Television',
                'quantity' => 2,
                'unit_price' => 300.00,
                'weight' => 120,
                'weight_measurement' => 'lbs',
                'promo_code_id' => 4,
                'tax_id' => 3,
                'shipping_total' => 60.10,
                'shipping_option_id' => 4
            ],
            //Shipment 5
            [ //Price Override (manual discount)
                'type_id' => 3,
                'shipment_id' => 5,
                'invoice_id' => 3,
                'name' => 'Manual Discount',
                'quantity' => 1,
                'unit_price' => 40.00
            ],
        ];

        foreach ($invoiceItems as $item) {
            InvoiceItem::create($item);
        }
    }
}
