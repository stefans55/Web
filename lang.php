<?php
$lang = $_POST['lang'] ?? 'ro';

$texts = [
  'ro' => [
    'title' => 'Blogul Domnișoarei Neonela',
    'header' => 'Domnișoara Neonela Chisari',
    'subtitle' => 'Eleganță, inteligență și ambiție',
    'about_me' => 'Despre Mine',
    'about_text1' => 'Mă numesc Neonela Chisari, o tânără ambițioasă și plină de încredere, cu o prezență elegantă și rafinată. La 18 ani, studiez la Liceul Teoretic „Olimp” din orașul Sîngerei și îmi construiesc cu determinare drumul spre o carieră în criminalistică, un domeniu care mă pasionează datorită analizei și investigației pe care le implică.',
    'about_text2' => 'Cu o înălțime de 1,73 m și ochii căprui expresivi, eman naturalețe și siguranță. Îmi place să îmi mențin echilibrul dintre minte și corp prin activități care mă relaxează și mă motivează.',
    'hobby_title' => 'Hobby-uri și Interese',
    'hobby_text1' => 'Sunt o iubitoare de animale, în special de căței, ceea ce reflectă latura mea sensibilă și empatică. În același timp, sunt pasionată de filmele cu criminalistică și de serialele turcești de dragoste și acțiune, care îmi stârnesc curiozitatea și imaginația.',
    'education_title' => 'Educație și Viitor',
    'education_text1' => 'Educația este baza carierei mele. Aleg criminalistica, o disciplină ce îmbină știința, dreptul și analiza comportamentului uman, pentru a explora metode avansate de investigație și a contribui la siguranța societății. Liceul reprezintă primul pas esențial spre studiile universitare în acest domeniu.',
    'gallery_title' => 'Galerie Foto',
    'footer' => '&copy; 2025 Blogul Domnișoarei Neonela'
  ],
  'en' => [
    'title' => 'Miss Neonela’s Blog',
    'header' => 'Miss Neonela Chisari',
    'subtitle' => 'Elegance, intelligence, and ambition',
    'about_me' => 'About Me',
    'about_text1' => 'My name is Neonela Chisari, an ambitious and confident young woman with an elegant and refined presence. At 18, I am studying at the Theoretical High School "Olimp" in the city of Singerei and I am building with determination my way towards a career in forensic science, a field that I am passionate about because of the analysis and investigation it involves.',
    'about_text2' => 'With a height of 1.73 m and expressive brown eyes, I exude naturalness and confidence. I like to maintain my mind-body balance through activities that relax and motivate me.',
    'hobby_title' => 'Hobbies and Interests',
    'hobby_text1' => 'I am an animal lover, especially puppies, which reflects my sensitive and empathetic side. At the same time, I am passionate about crime movies and Turkish love and action serials, which arouse my curiosity and imagination.',
    'education_title' => 'Education and Future',
    'education_text1' => 'Education is the foundation of my career. I choose forensic science, a discipline that combines science, law and the analysis of human behavior, to explore advanced investigative methods and contribute to the safety of society. High school is the essential first step towards university studies in this field.',
    'gallery_title' => 'Photo Gallery',
    'footer' => '&copy; 2025 Miss Neonela’s Blog'
  ]
];

echo json_encode($texts[$lang]);
