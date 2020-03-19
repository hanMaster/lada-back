<?php

use App\DoctorSpec;
use Illuminate\Database\Seeder;

class DoctorSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorSpec::insert([
            'doctor_id' => 1,
            'spec_id' => 7,
            'businessHours' => '[{"daysOfWeek": [2,3,4,5,6], "startTime": "10:00", "endTime": "18:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 2,
            'spec_id' => 7,
            'businessHours' => '[{"daysOfWeek": [1,2,3,5,6], "startTime": "11:00", "endTime": "18:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 3,
            'spec_id' => 7,
            'businessHours' => '[{"daysOfWeek": [1,2,3,4,5,6], "startTime": "12:00", "endTime": "18:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 4,
            'spec_id' => 7,
            'businessHours' => '[{"daysOfWeek": [1,2,3,4,6], "startTime": "08:00", "endTime": "14:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 5,
            'spec_id' => 6,
            'businessHours' => '[{"daysOfWeek": [1,2,3,4,5,6], "startTime": "11:00", "endTime": "13:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 6,
            'spec_id' => 6,
            'businessHours' => '[{"daysOfWeek": [3,4,5,6], "startTime": "13:00", "endTime": "16:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 7,
            'spec_id' => 6,
            'businessHours' => '[{"daysOfWeek": [1,2,4,5,6], "startTime": "16:00", "endTime": "18:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 8,
            'spec_id' => 5,
            'businessHours' => '[{"daysOfWeek": [1,2,3,5,6], "startTime": "09:00", "endTime": "18:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 9,
            'spec_id' => 1,
            'businessHours' => '[{"daysOfWeek":[1,3,5],"startTime":"08:00","endTime":"17:00"},{"daysOfWeek":[2,4,6],"startTime":"13:00","endTime":"16:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 9,
            'spec_id' => 2,
            'businessHours' => '[{"daysOfWeek": [2,4,5,6], "startTime": "08:00", "endTime": "13:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 10,
            'spec_id' => 2,
            'businessHours' => '[{"daysOfWeek": [2,3,4,5,6], "startTime": "13:00", "endTime": "16:00"}]'
        ]);

        DoctorSpec::insert([
            'doctor_id' => 11,
            'spec_id' => 3,
            'businessHours' => '[{"daysOfWeek": [1,2,3,4,5,6], "startTime": "08:30", "endTime": "16:30"}]'
        ]);
        DoctorSpec::insert([
            'doctor_id' => 12,
            'spec_id' => 4,
            'businessHours' => '[{"daysOfWeek": [1,2,5,6], "startTime": "10:00", "endTime": "18:00"}]'
        ]);
    }
}
