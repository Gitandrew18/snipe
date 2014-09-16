<?php
class ServiceAgreementTypesSeeder extends Seeder
{
    public function run()
    {

        // Initialize empty array
        $servicetype = array();

        $date = new DateTime;

        $servicetype[] = array(
            'id'                        => '4',
            'name'      		=> 'Unavailable',
            'notes'                     => 'Automatic seeded entry',
            'created_at' 		=> $date->modify('-10 day'),
            'updated_at' 		=> $date->modify('-1 day'),
            'user_id' 			=> 1,
            'deleted_at' 		=> NULL,
        );
                
        $servicetype[] = array(
            'id'                        => '3',
            'name'      		=> 'Assigned',
            'notes'                     => 'Automatic seeded entry',
            'created_at' 		=> $date->modify('-10 day'),
            'updated_at' 		=> $date->modify('-1 day'),
            'user_id' 			=> 1,
            'deleted_at' 		=> NULL,
        );
        
        $servicetype[] = array(
            'id'                        => '2',
            'name'      		=> 'Available',
            'notes'                     => 'Automatic seeded entry',
            'created_at' 		=> $date->modify('-10 day'),
            'updated_at' 		=> $date->modify('-1 day'),
            'user_id' 			=> 1,
            'deleted_at' 		=> NULL,
        );
        
        $servicetype[] = array(
            'id'                        => '1',
            'name'      		=> 'Pending',
            'notes'                     => 'Automatic seeded entry',
            'created_at' 		=> $date->modify('-10 day'),
            'updated_at' 		=> $date->modify('-1 day'),
            'user_id' 			=> 1,
            'deleted_at' 		=> NULL,
        );

        // Delete all the old data
        DB::table('serviceagreementtypes')->truncate();

        // Insert the new posts
        InventoryState::insert($servicetype);
    }

}

