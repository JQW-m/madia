<?PHP
$str = " Объяснил Аскольд Запашный на первой в истории публичной репетиции , которую они с братом Эдгардом провели в Большом Московском Цирке . И сразу после этого сунул голову в пасть льву . Лев спокойно съел кусок мяса изо рта Аскольда , хотя мог бы одним движением челюсти или лапы оторвать ему голову . Позже другой хищник - тигр Мерлин - прыгнет сквозь горящее кольцо , хотя видит огонь впервые в жизни . Эдгард Запашный научит тигра этому всего за несколько минут прямо на глазах у зрителей . Но главные вопросы остались без ответа : как на самом деле в цирке Запашных относятся ко львам и тиграм ? Их боятся или любят ? Их подчиняют или приручают ? Бьют или дрессируют ? Нам удалось попасть на закрытую репетицию и задать вопросы без свидетелей . Ответы на них в репортаже в формате 360-видео . ";
$tx  =  explode(" ", $str);
print_r(array_count_values($tx));
var_dump(preg_split("/\s+/u", "Объяснил Аскольд Запашный на первой в истории публичной репетиции , которую они с братом Эдгардом провели в Большом Московском Цирке . И сразу после этого сунул голову в пасть льву . Лев спокойно съел кусок мяса изо рта Аскольда , хотя мог бы одним движением челюсти или лапы оторвать ему голову . Позже другой хищник - тигр Мерлин - прыгнет сквозь горящее кольцо , хотя видит огонь впервые в жизни . Эдгард Запашный научит тигра этому всего за несколько минут прямо на глазах у зрителей . Но главные вопросы остались без ответа : как на самом деле в цирке Запашных относятся ко львам и тиграм ? Их боятся или любят ? Их подчиняют или приручают ? Бьют или дрессируют ? Нам удалось попасть на закрытую репетицию и задать вопросы без свидетелей . Ответы на них в репортаже в формате 360-видео .  ", null, PREG_SPLIT_NO_EMPTY));
?>
