<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\FAQ;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Artisan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        FAQ::create([
            "question" => "What is location of MFI?",
            "paragraph" => "Good day [Name of the Person]!, We are pleased to inform you of our branch locations:\n\nMFI Pasig Branch: MFI Building, Ortigas Avenue, Brgy. Ugong, Pasig City.\nMFI Pasay Branch: Isabel Building, 2240 Taft Avenue, Brgy. 058, Pasay City.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "general question"
        ]);

        FAQ::create([
            "question" => "If we don’t have the weekend class in that course?",
            "paragraph" => "Good day [Name of the Person]! Unfortunately, there is no schedule available, but we will keep you informed and update you if there is a weekend schedule arranged. ",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "general question"
        ]);

        FAQ::create([
            "question" => "Asking a person if there is available this course but don’t have the available the course need?",
            "paragraph" => "Good day [Name of the Person] ! Unfortunately, we don’t have the course they specify. Perhaps we can offer alternatives related to that course, which involve [explain how it becomes related].",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "general question"
        ]);

        FAQ::create([
            "question" => "What is the details of this program?",
            "paragraph" => "Good day [Name of the Person]! Upon completion of the course, participants must be able to:\n\n(copy paste the outline in https://courselist.mfi.org.ph/)\n",
            "enroll" => "To enroll in our short courses online, please visit the following link: https://courselist.mfi.org.ph/courses/55 (Please change the url base on the course chosen)\n\n1.) Upon selecting your desired course, kindly scroll down to view the available schedules.\n2.) Click the 'ENROLL' button to register for the short course.\n3.) You will be redirected to DragonPay to choose your preferred online payment method (Online Bank, E-Wallet, or Over-the-Counter).",
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "short course"
        ]);

        FAQ::create([
            "question" => "What time open the registrar office?",
            "paragraph" => "Good day [Name of the Person]! Our registrar's office is open from Monday to Friday from 8:00 AM to 5:00 PM.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "general question"
        ]);

        FAQ::create([
            "question" => "How to enroll in this course in this short course?",
            "paragraph" => "Good day [Name of the Person]! To enroll in any of our short courses, please submit one (1) valid ID and fill out the application form available at the registrar's office.",
            "enroll" => "To enroll in our short courses online, please visit the following link: https://courselist.mfi.org.ph/courses/55 (Please change the url base on the course chosen)\n\n1.) Upon selecting your desired course, kindly scroll down to view the available schedules.\n2.) Click the 'ENROLL' button to register for the short course.\n3.) You will be redirected to DragonPay to choose your preferred online payment method (Online Bank, E-Wallet, or Over-the-Counter).",
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "short course"
        ]);

        FAQ::create([
            "question" => "How much is this short course?",
            "paragraph" => "Good day [Name of the Person]! The training fee for [Name of the short course/ courses] is ₱amount.\n\nTo enroll in any of our short courses, please submit one (1) valid ID and fill out the application form available at the registrar's office.\n\nTo enroll in our short courses online, please visit the following link: https://courselist.mfi.org.ph/courses/55 (Please change the url base on the course chosen)\n\n1.) Upon selecting your desired course, kindly scroll down to view the available schedules.\n2.) Click the 'ENROLL' button to register for the short course.\n3.) You will be redirected to DragonPay to choose your preferred online payment method (Online Bank, E-Wallet, or Over-the-Counter).",
            "enroll" => "https://courselist.mfi.org.ph/courses/55",
            "cta" => "Enroll now",
            "program" => "short course"
        ]);

        FAQ::create([
            "question" => "What is the duration of this short course?",
            "paragraph" => "Good day [Name of the person]! The training duration for [Name of the short course/ courses] is [hours needed]. To enroll in any of our short courses, please submit one (1) valid ID and fill out the application form available at the registrar's office.",
            "enroll" => "To enroll in our short courses online, please visit the following link: https://courselist.mfi.org.ph/courses/55 (Please change the url base on the course chosen)\n\n1.) Upon selecting your desired course, kindly scroll down to view the available schedules.\n2.) Click the 'ENROLL' button to register for the short course.\n3.) You will be redirected to DragonPay to choose your preferred online payment method (Online Bank, E-Wallet, or Over-the-Counter).",
            "cta" => "Learn more",
            "program" => "short course"
        ]);

        FAQ::create([
            "question" => "Ongoing na po ba itong short course na ito?",
            "paragraph" => "Good day [Name of the Person]! The [name of the short course/courses] short course will begin on [Date start], until [Date until]. Classes will be held from [Monday to Friday/Saturday]. Please note that all our schedules are tentative, and for some courses, we require a minimum number of participants in order to proceed with the course.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "short course"
        ]);

        FAQ::create([
            "question" => "If the short course is hybrid (online & face-to-face)",
            "paragraph" => "Good day [Name of the Person]!, This course follows a hybrid teaching modality, meaning it includes both online and face-to-face.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "short course"
        ]);

        FAQ::create([
            "question" => "What is the age limit of GT Foundation?",
            "paragraph" => "Good day [Name of the Person]!, Yes, GT Foundation’s scholarship program has an age limit, which is from 18 to 35 years old. Should you need more information.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "GT Foundation"
        ]);

        FAQ::create([
            "question" => "Ilan months ang program GT Foundation?",
            "paragraph" => "Good day, [Name of the person]! The program is a 2-year course, consisting of 1 year of academic studies followed by 1 year of On-the-Job Training (OJT). Additionally, there is a 75% allowance provided during the OJT period in GT Foundation.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "GT Foundation"
        ]);

        FAQ::create([
            "question" => "How to enroll GT Foundation/ DTS?",
            "paragraph" => "Good day [Name of the person] Thank you for reaching out! To enroll, please kindly click the link below, and you'll be guided through the process:",
            "enroll" => "GT Foundation: https://forms.gle/5HJ458TGWmemMdF88\nDTS: https://forms.gle/jBD9JL7gv4PAsLd3A",
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "GT Foundation"
        ]);

        FAQ::create([
            "question" => "Requirements need in (GT Foundation / DTS)?",
            "paragraph" => "Good day [Name of the Person] ! The requirements to be a scholar in GT Foundation are as follows:\n\n1.) Good moral character\n2.) Certificate of indigency\n3.) Two (2) 2x2 pictures\n4.) High school education (Form 138 if senior high) or college education (TOR if in college)\n5.) Birth certificate\nYou can fill out this form: (if GT Foundation [https://forms.gle/5HJ458TGWmemMdF88] else if DTS [https://forms.gle/jBD9JL7gv4PAsLd3A]) to ensure your application is processed. ",
            "enroll" => "https://forms.gle/5HJ458TGWmemMdF88",
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "GT Foundation"
        ]);

        FAQ::create([
            "question" => "If we don't have weekends in TESDA-TWSP?",
            "paragraph" => "Good day [Name of the Person]! Unfortunately, we don’t offer weekend classes at TESDA. Our classes run for 7 to 8 hours a day on weekdays.",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "TESDA-TWSP"
        ]);

        FAQ::create([
            "question" => "How to enroll to the TESDA-TWSP?",
            "paragraph" => "Thank you for your interest! To enroll, please click on the link below and fill out the form: https://forms.gle/7vJbxqDeWMaraBK26.\nFeel free to message us if you need further assistance. We're here to help! 🙂",
            "enroll" => null,
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "TESDA-TWSP"
        ]);

        FAQ::create([
            "question" => "TESDA (no schedule blended or online)",
            "paragraph" => "Good day [Name of the Person]! Thank you for your inquiry. Unfortunately, we do not have the exact class schedule for the CSS program at the moment. However, please note that the program is face-to-face, and classes are typically held Monday to Friday. ",
            "enroll" => "To inquire about any of the TESDA courses, just fill this out: https://forms.gle/7vJbxqDeWMaraBK26.",
            "cta" => "Feel free to message us if you need further assistance. We're here to help! 🙂",
            "program" => "TESDA-TWSP"
        ]);
 

   
        Artisan::call('passport:keys');
        Artisan::call('passport:client --personal --no-interaction');
        Artisan::call('storage:link');

    }
}
