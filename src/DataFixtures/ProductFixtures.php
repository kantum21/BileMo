<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $names = [
            "iPhone 12",
            "iPhone 11",
            "Samsung Galaxy Z Flip",
            "Samsung Galaxy S20",
            "Samsung Galaxy S10"

        ];
        $prices = [
            849,
            649,
            999,
            649,
            539
        ];
        $descriptions = [
            "The new Apple iPhone 12. Absolutely perfect for everything",
            "The Apple iPhone 11. A very good iPhone",
            "A great phone with an amazing flip screen",
            "The new Samsung Galaxy phone 5G compatible",
            "The famous Samsung Galaxy phone. Tested and approved by numerous customers"
        ];

        for ($i=0; $i<5; $i++) {
            $product = new Product();
            $product->setName($names[$i]);
            $product->setPrice($prices[$i]);
            $product->setDescription($descriptions[$i]);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
