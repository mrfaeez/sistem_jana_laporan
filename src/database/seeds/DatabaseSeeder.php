<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\DrugOrder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        Location::create([
			'patient_code' => 'K001',
			'patient_name' => 'Kamarul',
            'drug_name' => 'Paracetamol',
            'time' => $dateNow,
			'ward_name' => 'C6-1',
        ]);
        
        Location::create([
			'patient_code' => 'K002',
			'patient_name' => 'Ahmad',
            'drug_name' => 'Lipitor',
            'time' => $dateNow,
			'ward_name' => 'C6-2',
        ]);
        
        Location::create([
			'patient_code' => 'K003',
			'patient_name' => 'Sameon',
            'drug_name' => 'Delasone',
            'time' => $dateNow,
			'ward_name' => 'D6-1',
        ]);
        
        Location::create([
			'patient_code' => 'K004',
			'patient_name' => 'Rafieq',
            'drug_name' => 'Neurontin',
            'time' => $dateNow,
			'ward_name' => 'D6-2',
        ]);
        
        Location::create([
			'patient_code' => 'K005',
			'patient_name' => 'Chen',
            'drug_name' => 'Delasone',
            'time' => $dateNow,
			'ward_name' => 'E6-1',
        ]);
        
        Location::create([
			'patient_code' => 'K006',
			'patient_name' => 'Siva',
            'drug_name' => 'Synthroid',
            'time' => $dateNow,
			'ward_name' => 'E6-2',
        ]);

        DrugOrder::create([
			'patient_code' => 'K001',
            'drug_name' => 'Paracetamol',
        ]);
        
        DrugOrder::create([
			'patient_code' => 'K002',
            'drug_name' => 'Lipitor',
        ]);
        
        DrugOrder::create([
			'patient_code' => 'K003',
            'drug_name' => 'Delasone',

        ]);
        
        DrugOrder::create([
			'patient_code' => 'K004',
            'drug_name' => 'Neurontin',
            
        ]);
        
        DrugOrder::create([
			'patient_code' => 'K005',
            'drug_name' => 'Delasone',
        ]);
        
        DrugOrder::create([
			'patient_code' => 'K006',
            'drug_name' => 'Synthroid',
        ]);
        
        
    }
}
