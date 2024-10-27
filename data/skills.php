<?php
// Skills data with corresponding levels (percentage)
$skills = [
    ["name" => "HTML", "level" => 90],
    ["name" => "CSS", "level" => 85],
    ["name" => "JavaScript", "level" => 80],
    ["name" => "PHP", "level" => 75],
    ["name" => "React", "level" => 70],
    ["name" => "Node.js", "level" => 65],
    ["name" => "MySQL", "level" => 70]
];

// Ensure skills are displayed correctly
if (!empty($skills)) {
    foreach ($skills as $skill): ?>
        <div class="skill">
            <div class="skill__name"><?= htmlspecialchars($skill['name']); ?></div>
            <div class="skill__bar">
                <div class="skill__level" style="width: <?= htmlspecialchars($skill['level']); ?>%;"></div>
            </div>
        </div>
    <?php endforeach;
} else {
    echo "<p>No skills available.</p>";
}
