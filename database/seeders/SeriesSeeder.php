<?php

namespace Database\Seeders;

use App\Models\Series;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = [
            [
                'id' => 1,
                'name' => 'Lost',
                'description' => 'Lost is an American drama television series that originally aired on ABC from September 22, 2004, to May 23,
                    2010, over six seasons, comprising a total of 121 episodes. The show contains elements of supernatural and science fiction,
                    and follows the survivors of a commercial jet airliner flying between Sydney and Los Angeles, after the plane crashes on a mysterious island
                    somewhere in the South Pacific Ocean. The story is told in a heavily serialized manner. Episodes typically feature a primary storyline set on the island,
                    augmented by flashback or flashforward sequences which provide additional insight into the involved characters.',
                'created_at' => '2004-07-22 00:00:00'
            ],
            [
                'id' => 2,
                'name' => 'Gre\'s Anatomy',
                'description' => 'Grey\'s Anatomy is an American medical drama television series that premiered on March 27, 2005, on the American Broadcasting Company (ABC) as a mid-season replacement. The fictional series focuses on the lives of surgical interns,
                    residents, and attendings as they develop into seasoned doctors while balancing personal and professional relationships. The title is an allusion to Gray\'s Anatomy, a classic human anatomy textbook first published in 1858 in London and written by Henry Gray.
                    Shonda Rhimes developed the pilot and continued to write for the series until 2017. Krista Vernoff, who previously worked with Rhimes, is now the showrunner. Rhimes was also one of the executive producers alongside Betsy Beers,
                    Mark Gordon, Krista Vernoff, Rob Corn, Mark Wilding, and Allan Heinberg, and recently, Ellen Pompeo. Although the series is set in Seattle, it is filmed primarily in Los Angeles, California.',
                'created_at' => '2007-03-27 00:00:00'
            ]
        ];

        foreach ($series as $serie) {
            Series::create([
                'id' => $serie['id'],
                'name' => $serie['name'],
                'description' => $serie['description'],
                'created_at' => $serie['created_at']
            ]);
        }
    }
}
