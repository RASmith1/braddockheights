<?php

class BraddockheightsSeeder extends Seeder {

	public function run() {

		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE committee_members');
		DB::statement('TRUNCATE bhca_members');
		DB::statement('TRUNCATE users');
        
        /******************************************/

        $user = new User;
	    $user->email      = 'bucknbeck@verizon.net';
	    $user->password   = Hash::make('bnb1234');
	    $user->first_name = 'Rebecca';
	    $user->last_name  = 'Smith';
	    $user->save();  
        
        /*$faker = Faker\Factory::create();*/

        /*for ($i = 0; $i < 3; $i++)
        {
          $user = User::create(array(
            'email' => $faker->email,
            'password' => $faker->word
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'picture' => $faker->  
          ));
          
        }*/
        
        /******************************************/
        
        # records in bhca_members table should be seeded before the corresponding committee_members table 
        # record because the latter points to the former with a foreign key.
        # BHCA Members
		$bhca_member = new BhcaMember;
        $bhca_member->first_name   = 'Amy';
        $bhca_member->middle_name  = 'Ann';
        $bhca_member->last_name    = 'Adams';
        $bhca_member->full_name    = 'Adams, Amy Ann';
        $bhca_member->first_email  = 'AAA@gmail.com';
        $bhca_member->second_email = 'AAA@verizon.net';
        $bhca_member->address      = 'AAA Alberta Ave.\nAlberta, AL 00000';
        $bhca_member->initial_date_of_membership     = '2014-12-15';
        $bhca_member->date_of_last_processed_payment = '2014-12-15';
        $bhca_member->save();
        
        # Committee Members
		$committee_member = new CommitteeMember;
        $committee_member->picture     = '/images/people/woman1.jpg';
        $committee_member->first_name   = 'Amy';
        $committee_member->middle_name  = 'Ann';
        $committee_member->last_name    = 'Adams';
        $committee_member->email        = 'AAA@gmail.com';
        $committee_member->committee_position = '';
        $committee_member->bio          = 'I have lived in Braddock Heights since the early 2001s. I love to
                                     meet new neighbors. I\'ve been a BHCA Board member for 1 year.';
        $committee_member->bhca_board_member = 'true';
        $committee_member->bhca_pool_committee_member = 'true';
        $committee_member->finance_committee_member = 'true';
        $committee_member->programs_committee_member = 'false';
        $committee_member->property_committee_member = 'false';
        $committee_member->membership_committee_member = 'false';
        $committee_member->bhcaMember()->associate($bhca_member); # <--- Associate the BHCA Member with this Committee Member
        $committee_member->save();
        
        /******************************************/
        
        $bhca_member = new BhcaMember;
        $bhca_member->first_name   = 'Beth';
        $bhca_member->middle_name  = 'Bea';
        $bhca_member->last_name    = 'Boxer';
        $bhca_member->full_name    = 'Boxer, Beth Bea';
        $bhca_member->first_email  = 'bbb@gmail.com';
        $bhca_member->second_email = 'bbb@verizon.net';
        $bhca_member->address      = 'BBBB Burns Blvd.\nBellow, LA 11111';
        $bhca_member->initial_date_of_membership     = '1994-11-12';
        $bhca_member->date_of_last_processed_payment = '2014-11-01';
        $bhca_member->save();
        
        $committee_member = new CommitteeMember;
        $committee_member->picture      = '/images/people/baby1.jpg';
        $committee_member->first_name   = 'Beth';
        $committee_member->middle_name  = 'Bea';
        $committee_member->last_name    = 'Boxer';
        $committee_member->email        = 'bbb@gmail.com';
        $committee_member->committee_position = '';
        $committee_member->bio          = 'I have lived in Braddock Heights since early 2002. I love to
                                     meet new neighbors. I\'ve been a BHCA Board member for 2 years.';
        $committee_member->bhca_board_member = 'true';
        $committee_member->bhca_pool_committee_member = 'false';
        $committee_member->finance_committee_member = 'false';
        $committee_member->programs_committee_member = 'true';
        $committee_member->property_committee_member = 'true';
        $committee_member->membership_committee_member = 'false';
        $committee_member->bhcaMember()->associate($bhca_member); # <--- Associate the BHCA Member with this Committee Member
        $committee_member->save();
        
        /******************************************/
        
        $bhca_member = new BhcaMember;
        $bhca_member->first_name   = 'Calvin';
        $bhca_member->middle_name  = 'Coolidge';
        $bhca_member->last_name    = 'Crum';
        $bhca_member->full_name    = 'Crum, Calvin Coolidge';
        $bhca_member->first_email  = 'ccc@gmail.com';
        $bhca_member->second_email = 'CCC@verizon.net';
        $bhca_member->address      = 'CCC Colburn Cir.\nColonial, California 33333';
        $bhca_member->initial_date_of_membership     = '2010-02-06';
        $bhca_member->date_of_last_processed_payment = '2014-01-15';
        $bhca_member->save();
        
        $committee_member = new CommitteeMember;
        $committee_member->picture      = '/images/people/man1.jpg';
        $committee_member->first_name   = 'Calvin';
        $committee_member->middle_name  = 'Coolidge';
        $committee_member->last_name    = 'Crum';
        $committee_member->email        = 'ccc@gmail.com';
        $committee_member->committee_position = '';
        $committee_member->bio          = 'I have lived in Braddock Heights since late 2003. I love to
                                     meet new neighbors. I\'ve been a BHCA Board member for 3 years.';
        $committee_member->bhca_board_member = 'true';
        $committee_member->bhca_pool_committee_member = 'false';
        $committee_member->finance_committee_member = 'false';
        $committee_member->programs_committee_member = 'false';
        $committee_member->property_committee_member = 'false';
        $committee_member->membership_committee_member = 'true';
        $committee_member->bhcaMember()->associate($bhca_member); # <--- Associate the BHCA Member with this Committee Member
        $committee_member->save();
        
        /***************************************************/
        /* Now we'll add two records to bhca_members table */
        /* without adding any to committee_members table.  */
        /* The relationship is one-to-many (bhca_members to*/ 
        /* committee_members */
        
        $bhca_member = new BhcaMember;
        $bhca_member->first_name   = 'Delta';
        $bhca_member->middle_name  = 'Dawn';
        $bhca_member->last_name    = 'Darringer';
        $bhca_member->full_name    = 'Darringer, Delta Dawn';
        $bhca_member->first_email  = 'ddd@gmail.com';
        $bhca_member->second_email = 'DDD@verizon.net';
        $bhca_member->address      = 'DdD Dunlop Dr.\nDivine, Delaware 44444';
        $bhca_member->initial_date_of_membership     = '2010-09-08';
        $bhca_member->date_of_last_processed_payment = '2014-12-11';
        $bhca_member->save();
        
        $bhca_member = new BhcaMember;
        $bhca_member->first_name   = 'Ellen';
        $bhca_member->middle_name  = 'Elaine';
        $bhca_member->last_name    = 'Ernst';
        $bhca_member->full_name    = 'Ernst, Elaine Ellen';
        $bhca_member->first_email  = 'eee@earthlink.com';
        $bhca_member->second_email = 'EEEEEEE@verizon.net';
        $bhca_member->address      = 'EEE Enough Egress\nEveready, Georgia 55555';
        $bhca_member->initial_date_of_membership     = '2011-07-07';
        $bhca_member->date_of_last_processed_payment = '2014-08-11';
        $bhca_member->save();
        
	}

}