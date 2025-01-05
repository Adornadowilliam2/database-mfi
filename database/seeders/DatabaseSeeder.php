<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Artisan;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Section;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /**
         * Generate passport keys
         */
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 2
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 3
        User::create([
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 4
        User::create([
            'name' => 'Bob Brown',
            'email' => 'bob.brown@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 5
        User::create([
            'name' => 'Charlie Davis',
            'email' => 'charlie.davis@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 6
        User::create([
            'name' => 'David Wilson',
            'email' => 'david.wilson@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 7
        User::create([
            'name' => 'Eva White',
            'email' => 'eva.white@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 8
        User::create([
            'name' => 'Frank Black',
            'email' => 'frank.black@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 9
        User::create([
            'name' => 'Grace Green',
            'email' => 'grace.green@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        // User 10
        User::create([
            'name' => 'Hank Blue',
            'email' => 'hank.blue@example.com',
            'password' => bcrypt('password123'), // Ensure you hash the password
            'role' => 'admin',
        ]);

        RoomType::create([
            'room_type' => 'Laboratory'
        ]);
        RoomType::create([
            'room_type' => 'Classroom'
        ]);
        RoomType::create([
            'room_type' => 'Auditorium'
        ]);
        RoomType::create([
            'room_type' => 'Conference Room'
        ]);
        RoomType::create([
            'room_type' => 'Library'
        ]);

        Section::create([
            'section_name' => '1e2',
            'section_type' => 'DTS'
        ]);
        Section::create([
            'section_name' => '1e1',
            'section_type' => 'DTS'
        ]);
        Section::create([
            'section_name' => 'stem',
            'section_type' => 'Senior High'
        ]);

        Subject::create([
            'subject_name' => 'Mathematics',
            'subject_type' => 'Core',
        ]);
        Subject::create([
            'subject_name' => 'Physics',
            'subject_type' => 'Core',
        ]);
        Subject::create([
            'subject_name' => 'Chemistry',
            'subject_type' => 'Core',
        ]);
        Subject::create([
            'subject_name' => 'Biology',
            'subject_type' => 'Core',
        ]);
        Subject::create([
            'subject_name' => 'History',
            'subject_type' => 'Elective',
        ]);
        Subject::create([
            'subject_name' => 'Geography',
            'subject_type' => 'Elective',
        ]);
        Subject::create([
            'subject_name' => 'English Literature',
            'subject_type' => 'Elective',
        ]);
        Subject::create([
            'subject_name' => 'Computer Science',
            'subject_type' => 'Elective',
        ]);
        Subject::create([
            'subject_name' => 'Philosophy',
            'subject_type' => 'Elective',
        ]);
        Subject::create([
            'subject_name' => 'Art',
            'subject_type' => 'Elective',
        ]);

        Room::create([
            'room_name' => 'Room 1',
            'room_type_id' => 1,
            'location' => 'Location 1',
            'description' => 'Description for Room 1',
            'capacity' => 2,
            'image' => null, // Optional image, set null if not provided
        ]);
        Room::create([
            'room_name' => 'Room 2',
            'room_type_id' => 2,
            'location' => 'Location 2',
            'description' => 'Description for Room 2',
            'capacity' => 4,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 3',
            'room_type_id' => 3,
            'location' => 'Location 3',
            'description' => 'Description for Room 3',
            'capacity' => 5,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 4',
            'room_type_id' => 1,
            'location' => 'Location 4',
            'description' => 'Description for Room 4',
            'capacity' => 6,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 5',
            'room_type_id' => 2,
            'location' => 'Location 5',
            'description' => 'Description for Room 5',
            'capacity' => 8,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 6',
            'room_type_id' => 3,
            'location' => 'Location 6',
            'description' => 'Description for Room 6',
            'capacity' => 4,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 7',
            'room_type_id' => 1,
            'location' => 'Location 7',
            'description' => 'Description for Room 7',
            'capacity' => 3,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 8',
            'room_type_id' => 2,
            'location' => 'Location 8',
            'description' => 'Description for Room 8',
            'capacity' => 2,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 9',
            'room_type_id' => 3,
            'location' => 'Location 9',
            'description' => 'Description for Room 9',
            'capacity' => 5,
            'image' => null,
        ]);
        Room::create([
            'room_name' => 'Room 10',
            'room_type_id' => 1,
            'location' => 'Location 10',
            'description' => 'Description for Room 10',
            'capacity' => 6,
            'image' => null,
        ]);

        Booking::create([
            'user_id' => 1,
            'room_id' => 1,
            'subject_id' => 1,
            'section_id' => 1,
            'start_time' => '2024-12-29 09:00:00',
            'end_time' => '2024-12-29 10:00:00',
            'day_of_week' => 'Monday',
            'status' => 'confirmed',
            'book_from' => '2024-12-29',
            'book_until' => '2024-12-29',
        ]);
        // Booking 2
        Booking::create([
            'user_id' => 2,
            'room_id' => 2,
            'subject_id' => 1,
            'section_id' => 2,
            'start_time' => '2024-12-29 11:00:00',
            'end_time' => '2024-12-29 12:00:00',
            'day_of_week' => 'Monday',
            'status' => 'confirmed',
            'book_from' => '2024-12-29',
            'book_until' => '2024-12-29',
        ]);
        // Continue creating other bookings...
        
        Artisan::call('passport:keys');
        Artisan::call('passport:client --personal --no-interaction');
    }
}
