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
                'description' => 'Grey\'s Anatomy is an American medical drama television series that premiered on March 27, 2005, on the American Broadcasting Company (ABC) as a mid-season replacement. 
                    The fictional series focuses on the lives of surgical interns, residents, and attendings as they develop into seasoned doctors while balancing personal and professional relationships. 
                    The title is an allusion to Gray\'s Anatomy, a classic human anatomy textbook first published in 1858 in London and written by Henry Gray. Shonda Rhimes developed the pilot and
                    continued to write for the series until 2017. Krista Vernoff, who previously worked with Rhimes, is now the showrunner. Rhimes was also one of the executive producers alongside Betsy Beers,
                    Mark Gordon, Krista Vernoff, Rob Corn, Mark Wilding, and Allan Heinberg, and recently, Ellen Pompeo. Although the series is set in Seattle, it is filmed primarily in Los Angeles, California.',
                'created_at' => '2007-03-27 00:00:00'
            ],
            [
                'id' => 3,
                'name' => 'Game of Thrones',
                'description' => 'Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss for HBO. 
                    It is an adaptation of A Song of Ice and Fire, a series of fantasy novels by George R. R. Martin, the first of which is A Game of Thrones. 
                    The show was shot in the United Kingdom, Canada, Croatia, Iceland, Malta, Morocco, and Spain. It premiered on HBO in the United States on April 17, 2011, and concluded on May 19, 2019, 
                    with 73 episodes broadcast over eight seasons.',
                'created_at' => '2011-04-17 00:00:00',
            ],
            [
                'id' => 4,
                'name' => 'Mr. Robot',
                'description' => 'Mr. Robot is an American drama thriller television series created by Sam Esmail for USA Network. 
                    It stars Rami Malek as Elliot Alderson, a cybersecurity engineer and hacker with social anxiety disorder and clinical depression.
                    Elliot is recruited by an insurrectionary anarchist known as "Mr. Robot", played by Christian Slater, to join a group of hacktivists called "fsociety". 
                    The group aims to destroy all debt records by encrypting the financial data of E Corp, the largest conglomerate in the world.',
                'created_at' => '2015-05-24 00:00:00'
            ],
            [
                'id' => 5,
                'name' => 'How to Get Away with Murder',
                'description' => 'How to Get Away with Murder is an American legal thriller television series that premiered on ABC on September 25, 2014, and concluded on May    
                    14, 2020. The series was created by Peter Nowalk, and produced by Shonda Rhimes and ABC Studios. The series aired on ABC as part of a night of programming, 
                    all under Rhimes\'s Shondaland production company.',
                'created_at' => '2014-07-25 00:00:00'
            ],
            [
                'id' => 6,
                'name' => 'Sex Education',
                'description' => 'Sex Education is a British comedy-drama television series created by Laurie Nunn. Starring Asa Butterfield as an insecure teenager and Gillian Anderson as his mother, a sex therapist, the   
                    series premiered on 11 January 2019 on Netflix. Ncuti Gatwa, Emma Mackey, Connor Swindells, Aimee Lou Wood and Kedar Williams-Stirling co-star. It became a critical and commercial success for Netflix, with over 40 million viewers streaming the first series after its debut. The second series was released on 17 January 2020, and the show has been renewed for a third series',
                'created_at' => '2019-01-11 00:00:00'
            ],
            [
                'id' => 7,
                'name' => 'Dark',
                'description' => 'Dark is a German science fiction thriller streaming television series co-created by Baran bo Odar and Jantje Friese. It ran for three seasons from 2017 to 2020. In the aftermath of  
                    a child\'s disappearance, Dark follows characters from the fictional German town of Winden as they pursue the truth. They follow connections between four estranged families to unravel a sinister time travel conspiracy which spans several generations. The series explores the existential implications of time, and its effect on human nature.',
                'created_at' => '2018-12-01 00:00:00'
            ],
            [
                'id' => 8,
                'name' => 'On My Block',
                'description' => 'On My Block is an American teen comedy-drama streaming television series, created by Lauren Iungerich, Eddie Gonzalez, and Jeremy Haft.[1][2] The first season, consisting of ten episodes,   
                    was released on Netflix on March 16, 2018. On April 13, 2018, the series was renewed for a second season and it premiered on March 29, 2019.On April 29, 2019, the series was renewed for a third season which premiered on March 11, 2020. On January 29, 2021, the series was renewed for a fourth and final season.',
                'created_at' => '2018-03-13 00:00:00'
            ],
            [
                'id' => 9,
                'name' => 'Gotham',
                'description' => 'Gotham was an American action crime drama television series developed by Bruno Heller, produced by Warner Bros. Television and based on characters published by DC Comics and appearing in the 
                    Batman franchise, primarily those of James Gordon and Bruce Wayne. The series premiered on Fox on September 22, 2014, and concluded on April 25, 2019. The series stars Ben McKenzie as Jim Gordon and David Mazouz as Bruce Wayne. The series was originally intended to focus only on Gordon\'s early days with the Gotham City Police Department, but they subsequently included the Bruce Wayne character and the origin stories of Batman\'s rogues gallery.',
                'created_at' => '2014-07-22 00:00:00'
            ],
            [
                'id' => 10,
                'name' => 'Never Have I Ever',
                'description' => 'Never Have I Ever is an American coming of age comedy-drama television series starring Maitreyi Ramakrishnan and created by Mindy Kaling and Lang Fisher. The comedy is partially based on     
                    Kaling\'s childhood in the Boston area. It premiered on Netflix on April 27, 2020, and is about an Indian American high school student dealing with the death of her father. The series received positive reviews.',
                'created_at' => '2020-03-27 00:00:00'
            ],

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
