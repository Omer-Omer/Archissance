<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'c_name' => 'ABC',
                'c_url' => 'g.com',
                'c_description' => 'g.com',
            ),
            array(
                'c_name' => 'Roz Industries',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/RozIndustries.html',
                'c_description' => 'ROZ INDUSTRIES is Sports Clothing & Equipment Manufacturing Industry established on 2005. We are a company specialized in sporting business services, designing, production, marketing, located in Sialkot, Punjab, Pakistan',
            ),
            array(
                'c_name' => 'Hartmann International Trading',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/HARTMANN-INTERNATIONAL.html',
                'c_description' => 'Our assignment is to create long term business between our worldwide network of professional partners and leading brands within the Air soft, Law enforcement, hunting, shooting, fitness Crossfit Gym clothing, Sports, PPE and outdoor industry',
            ),
            array(
                'c_name' => 'Lexon Industries',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/LEXON-INDUSTRIES.html',
                'c_description' => 'Lexon Industries Manufacture and Supply all sort of Sports Wears, Casual Wears, Sports Balls and Leather Garments. Lexon Industries is one of the top Manufacturers cum Exporters.',
            ),
            array(
                'c_name' => 'Tdg Impex',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/TDG-IMPEX-1.html',
                'c_description' => 'TDG IMPEX T/A CUSTOMKITS Under the Brand Name of Renzo started its journey in the world of sportswear in year 1990. We became the major supplier of some known brands in Europe,Usa &amp; Australia and started providing the complete range of their catalogues.',
            ),
            array(
                'c_name' => 'Dada Chiragh Manufacturing Company',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/DADA-CHIRAGH.html',
                'c_description' => 'We are manufacture of surgical beauty manicure and pedicure instrument HAIR EXTENSION PLIERS &amp; KITS,HAIR CARE SETS,CUTICLE NIPPERS,NAIL &amp; PEDICURE NIPPERS,PUSHERS &amp; SKIN CARE TOOLS,PROFESSIONAL TWEEZERS,HAIR &amp; SKIN CARE TOOLS,PEDICURE &amp; NAIL CARE TOOLS,MANICURE &amp; PEDICURE SETS,AND ALL KINDS OF SCISSORS',
            )
        );

        foreach ($data as $company) {
            DB::table('companies')->insert([
                'name' => $company['c_name'],
                'introduction' => $company['c_description'],
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

