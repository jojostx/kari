<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'icon' => '<svg class="w-2/3" viewBox="0 0 222 247" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Group-8"><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(0.8660256 0.49999964 -0.49999964 0.8660256 40.99997 147.43158)" id="Rectangle" fill="#42205A" fill-rule="evenodd" stroke="none" /><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(-0.8660259 0.5 0.5 0.8660259 180.07146 147.4)" id="Rectangle-Copy" fill="#42205A" fill-rule="evenodd" stroke="none" /><g id="Group-Copy" transform="translate(12.058945 0)"><path d="M0 98C0 43.8761 43.8761 0 98 0C152.124 0 196 43.8761 196 98C196 152.124 152.124 196 98 196C43.8761 196 0 152.124 0 98Z" id="Ellipse" fill="#CD7F32" fill-rule="evenodd" stroke="none" /></g><path d="M0 65C0 29.1015 29.1015 0 65 0C100.899 0 130 29.1015 130 65C130 100.899 100.899 130 65 130C29.1015 130 0 100.899 0 65Z" transform="translate(45.058945 33)" id="Ellipse" fill="#F3973C" fill-rule="evenodd" stroke="none" /><path d="M39 0L50.4618 23.2242L76.0912 26.9483L57.5456 45.0258L61.9237 70.5516L39 58.5L16.0765 70.5517L20.4544 45.0259L1.90875 26.9485L27.5381 23.2242L39 0Z" transform="translate(71.058945 59)" id="Star" fill="#FFFFFF" fill-rule="evenodd" stroke="none" /></g></svg>',
            'tag' => \uniqid('bronze_', \true),
            'name' => 'bronze',
            'principal' => 25000.00,
            'interest' => 0.07,
            'bonus' => 0.02,
        ]);

        Plan::create([
            'icon' => '<svg class="w-2/3" viewBox="0 0 222 247" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Group-9"><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(0.8660256 0.49999964 -0.49999964 0.8660256 41 147.43158)" id="Rectangle-Copy-2" fill="#42205A" fill-rule="evenodd" stroke="none" /><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(-0.8660259 0.5 0.5 0.8660259 180.07153 147.39996)" id="Rectangle-Copy-3" fill="#42205A" fill-rule="evenodd" stroke="none" /><g id="Group-Copy-3" transform="translate(12.05896 0)"><path d="M0 98C0 43.8761 43.8761 0 98 0C152.124 0 196 43.8761 196 98C196 152.124 152.124 196 98 196C43.8761 196 0 152.124 0 98Z" id="Ellipse" fill="#C0C0C0" fill-rule="evenodd" stroke="none" /></g><path d="M0 65C0 29.1015 29.1015 0 65 0C100.899 0 130 29.1015 130 65C130 100.899 100.899 130 65 130C29.1015 130 0 100.899 0 65Z" transform="translate(45.05896 33)" id="Ellipse-Copy" fill="#9E9E9E" fill-rule="evenodd" stroke="none" /><path d="M39 0L50.4618 23.2242L76.0912 26.9483L57.5456 45.0258L61.9237 70.5516L39 58.5L16.0765 70.5517L20.4544 45.0259L1.90875 26.9485L27.5381 23.2242L39 0Z" transform="translate(71.05896 59)" id="Star-Copy" fill="#FFFFFF" fill-rule="evenodd" stroke="none" /></g></svg>',
            'tag' => \uniqid('silver_', \true),
            'name' => 'silver',
            'principal' => 50000.00,
            'interest' => 0.075,
            'bonus' => 0.025,
        ]);

        Plan::create([
            'icon' => '<svg class="w-2/3" viewBox="0 0 222 247" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Group-11"><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(0.8660256 0.49999964 -0.49999964 0.8660256 40.99997 147.43158)" id="Rectangle-Copy-4" fill="#42205A" fill-rule="evenodd" stroke="none" /><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(-0.8660259 0.5 0.5 0.8660259 180.0715 147.39996)" id="Rectangle-Copy-5" fill="#42205A" fill-rule="evenodd" stroke="none" /><g id="Group-Copy-5" transform="translate(12.058929 0)"><path d="M0 98C0 43.8761 43.8761 0 98 0C152.124 0 196 43.8761 196 98C196 152.124 152.124 196 98 196C43.8761 196 0 152.124 0 98Z" id="Ellipse" fill="#FFD700" fill-rule="evenodd" stroke="none" /></g><path d="M0 65C0 29.1015 29.1015 0 65 0C100.899 0 130 29.1015 130 65C130 100.899 100.899 130 65 130C29.1015 130 0 100.899 0 65Z" transform="translate(45.05893 33)" id="Ellipse-Copy-2" fill="#D4AF37" fill-rule="evenodd" stroke="none" /><path d="M39 0L50.4618 23.2242L76.0912 26.9483L57.5456 45.0258L61.9237 70.5516L39 58.5L16.0765 70.5517L20.4544 45.0259L1.90875 26.9485L27.5381 23.2242L39 0Z" transform="translate(71.05893 59)" id="Star-Copy-2" fill="#FFFFFF" fill-rule="evenodd" stroke="none" /></g></svg>',
            'tag' => \uniqid('gold_', \true),
            'name' => 'gold',
            'principal' => 100000.00,
            'interest' => 0.08,
            'bonus' => 0.03,
        ]);

        Plan::create([
            'icon' => '<svg class="w-2/3" viewBox="0 0 222 247" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Group-10"><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(0.8660256 0.49999964 -0.49999964 0.8660256 41 147.43152)" id="Rectangle-Copy-6" fill="#42205A" fill-rule="evenodd" stroke="none" /><path d="M0 0L55.44 0L55.44 74.088Q55.44 74.2259 55.4305 74.3635Q55.421 74.501 55.4021 74.6376Q55.3831 74.7741 55.3548 74.9091Q55.3265 75.044 55.289 75.1767Q55.2515 75.3093 55.2049 75.4391Q55.1583 75.5689 55.1029 75.6951Q55.0475 75.8214 54.9835 75.9435Q54.9195 76.0656 54.8473 76.1831Q54.7751 76.3005 54.6949 76.4127Q54.6148 76.5249 54.5271 76.6313Q54.4394 76.7377 54.3446 76.8378Q54.2498 76.9379 54.1484 77.0312Q54.0469 77.1245 53.9392 77.2107Q53.8316 77.2968 53.7183 77.3753Q53.6049 77.4538 53.4864 77.5243Q53.368 77.5949 53.2449 77.6571Q53.1219 77.7193 52.9948 77.7728Q52.8678 77.8264 52.7374 77.8711Q52.607 77.9158 52.4738 77.9514Q52.3406 77.987 52.2052 78.0133Q52.0699 78.0397 51.9331 78.0567Q51.7963 78.0736 51.6586 78.0811Q51.5209 78.0886 51.3831 78.0866Q51.2452 78.0846 51.1078 78.0731Q50.9704 78.0616 50.8341 78.0407Q50.6979 78.0198 50.5634 77.9896Q50.4289 77.9593 50.2967 77.9198Q50.1646 77.8804 50.0356 77.8319Q49.9065 77.7835 49.7811 77.7263Q49.6556 77.669 49.5344 77.6033Q49.4132 77.5376 49.2969 77.4636Q49.1805 77.3897 49.0695 77.308L27.7656 61.6171L6.36548 77.3271Q6.25442 77.4086 6.13801 77.4823Q6.02161 77.556 5.9004 77.6215Q5.7792 77.687 5.65377 77.744Q5.52835 77.801 5.3993 77.8493Q5.27025 77.8975 5.13819 77.9368Q5.00612 77.976 4.87167 78.0061Q4.73722 78.0361 4.60101 78.0569Q4.46481 78.0776 4.3275 78.0889Q4.1902 78.1003 4.05243 78.1021Q3.91467 78.1039 3.77711 78.0963Q3.63955 78.0886 3.50284 78.0716Q3.36614 78.0545 3.23093 78.028Q3.09572 78.0015 2.96265 77.9658Q2.82959 77.9301 2.69929 77.8853Q2.569 77.8406 2.4421 77.7869Q2.31519 77.7333 2.19228 77.671Q2.06937 77.6088 1.95104 77.5382Q1.8327 77.4677 1.7195 77.3892Q1.60631 77.3106 1.49878 77.2245Q1.39125 77.1384 1.28991 77.045Q1.18857 76.9517 1.09389 76.8516Q0.999211 76.7515 0.911645 76.6451Q0.824079 76.5388 0.74404 76.4266Q0.664002 76.3145 0.591871 76.1971Q0.51974 76.0797 0.455858 75.9577Q0.391977 75.8356 0.336648 75.7094Q0.281319 75.5833 0.234805 75.4536Q0.18829 75.3239 0.150811 75.1913Q0.113333 75.0587 0.0850668 74.9239Q0.056801 74.789 0.0378823 74.6526Q0.0189636 74.5161 0.00948181 74.3787Q0 74.2412 0 74.1034L0 0Z" transform="matrix(-0.8660259 0.5 0.5 0.8660259 180.07153 147.3999)" id="Rectangle-Copy-7" fill="#42205A" fill-rule="evenodd" stroke="none" /><g id="Group-Copy-7" transform="translate(12.05896 0)"><path d="M0 98C0 43.8761 43.8761 0 98 0C152.124 0 196 43.8761 196 98C196 152.124 152.124 196 98 196C43.8761 196 0 152.124 0 98Z" id="Ellipse" fill="#E5E4E2" fill-rule="evenodd" stroke="none" /></g><path d="M0 65C0 29.1015 29.1015 0 65 0C100.899 0 130 29.1015 130 65C130 100.899 100.899 130 65 130C29.1015 130 0 100.899 0 65Z" transform="translate(45.05896 33)" id="Ellipse-Copy-3" fill="#AFAFAF" fill-rule="evenodd" stroke="none" /><path d="M39 0L50.4618 23.2242L76.0912 26.9483L57.5456 45.0258L61.9237 70.5516L39 58.5L16.0765 70.5517L20.4544 45.0259L1.90875 26.9485L27.5381 23.2242L39 0Z" transform="translate(71.05896 59)" id="Star-Copy-3" fill="#FFFFFF" fill-rule="evenodd" stroke="none" /></g></svg>',
            'tag' => \uniqid('platinum_', \true),
            'name' => 'platinum',
            'principal' => 200000.00,
            'interest' => 0.085,
            'bonus' => 0.035,
        ]);
    }
}