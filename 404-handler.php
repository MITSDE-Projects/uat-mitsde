<?php

$request = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$redirects = [

                "/DistanceMBA/patna" => "/DistanceMBA/Patna",
                "/DistanceMBA/kumool" => "/DistanceMBA/kurnool",
                "/executive-mba-operations" => "/executive-mba-in-operations",
                "/executive-mba-finance-" => "/executive-mba-finance-management",
                "/DistanceMBA/maharashtra.php" => "/distance-mba-maharashtra",
                "/mit-office-of-career-services-" => "/mit-office-of-career-services",
                "/ui-ux-design-course-in-pun" => "/ui-ux-design-course-in-pune",
                "/pgdm-executive-in-construction-" => "/pgdm-executive-in-construction-and-project-management",
                "/pgdm-executive-in-modern-" => "/https://mitsde.com/pgdm-executive-in-modern-project-management",
                "/DistanceMBA/PGDinHumanResourceMng.php" => "/DistanceMBA/hr_management_course_online",
                "/DistanceMBA/PGDinProjectMng.php" => "/DistanceMBA/project-management-course",
                "/pgdm-executive-in-strategic-" => "/pgdm-executive-in-strategic-marketing-management",
                "/PGDM-Executive-In-Financial-Engineering" => "/pgdm-executive-in-finance-management",
                "/post-graduate-cetificate-in-digital-marketingIn" => "/post-graduate-cetificate-in-digital-marketing",
                "/PGDM-Executive-In-Global-" => "/pgdm-executive-in-global-logistics-and-supply-chain-management",
                "/pgdba-in-operations-" => "/pgdba-in-operations-management",
                "/PGCMDigitalM" => "/post-graduate-cetificate-in-digital-marketing",
                "/executive-mba-human-resource-" => "/executive-mba-human-resource-management",
                "/PGDMExecutive.php" => "/post-graduate-diploma-in-management-executive",
                "/post-graduate-certificate-in" => "/post-graduate-certificate-in-management",
                "/DistanceMBA/mba-in-supply-chain-managemen" => "/DistanceMBA/mba-in-supply-chain-management",
                "/generative-ai-for-" => "/gen-ai-for-educators",
                "/executive-mba-human" => "/executive-mba-human-resource-management",
                "/post-graduate-cetificate-in-digital-" => "/post-graduate-cetificate-in-digital-marketing",
                "/PGDM-Executive-In-Human-Capital" => "/pgdm-executive-in-human-capital-management",
                "/PGDinProjectMn" => "/pg-diploma-in-project-management",
                "/DistanceMBA/pg-diploma-in-operations-management" => "/DistanceMBA/operation-management-courses",
                "/DistanceMBA/Mumbai.php" => "/distance-mba-in-mumbai",
                "/post-graduate-cetificate-in-digital" => "/post-graduate-cetificate-in-digital-marketing",
                "/PGDInbanking-financialservices" => "/pg-diploma-in-banking-finance",
                "/executive-mba-in-project-" => "/executive-mba-in-project-management",
                "/pg-diploma-in-human-resource-" => "/pg-diploma-in-human-resource-management",
                "/pg-diploma-in-banking-" => "/pg-diploma-in-banking-finance",
                "/PGDM-Executive-In-Strategic-" => "/pgdm-executive-in-strategic-marketing-management",
                "/DistanceMBA/recognition-approval" => "/recognition-approval",
                "/DistanceMBA/sangali" => "/DistanceMBA/sangli",
                "/DistanceMBA/contact-us" => "/contact-us",
                "/pg-diploma-in-marketing-" => "/pg-diploma-in-marketing-management",
                "/DistanceMBA/pg-diploma-in-finance-management" => "/pg-diploma-in-finance-management",
                "/pgdm-executive-in-banking-" => "/pgdm-executive-in-banking-financial-services",
                "/DistanceMBA/pg-diploma-in-human-resource-management" => "/pg-diploma-in-human-resource-management",
                "/DistanceMBA/online-ai-digital-marketing-courses-in-jaipur" => "/online-ai-digital-marketing-courses-in-jaipur",
                "/executive-mba-in-business-" => "/executive-mba-in-business-analytics-and-ai",
                "/DistanceMBA/pg-diploma-in-project-management" => "/pg-diploma-in-project-management",
                "/PGDinFinanceMng" => "/pg-diploma-in-finance-management",
                "/DistanceMBA/pg-diploma-in-information-technology" => "/pg-diploma-in-information-technology",
                "/mit-office-of-" => "/mit-office-of-career-services",
                "/executive-mba-in-marketing" => "/executive-mba-marketing",
                "/pgdm-executive-in-" => "/post-graduate-diploma-in-management-executive",
                "/DistanceMBA/recognition-approval.php" => "/recognition-approval",
                "/DistanceMBA/online-ai-digital-marketing-courses-in-delhi-ncr" => "/online-ai-digital-marketing-courses-in-delhi-ncr",
                "/DistanceMBA/pg-diploma-in-construction-and-project-management" => "/pg-diploma-in-construction-and-project-management",
                "/pgdm-executive-in-finance-" => "/pgdm-executive-in-finance-management",
                "/pg-diploma-in-operations-" => "/pg-diploma-in-operations-management",
                "/DistanceMBA/online-pgdm-colleges-in-jaipur" => "/online-pgdm-colleges-in-jaipur",
                "/DistanceMBA/online-ai-digital-marketing-courses-in-kolkata" => "/online-ai-digital-marketing-courses-in-kolkata",
                "/mocs-for-" => "/mocs-for-external-learner",
                "/PGDM-Executive-In-" => "/post-graduate-diploma-in-management-executive",

];

if (array_key_exists($request, $redirects)) {
    header("Location: " . $redirects[$request], true, 301);
    exit;
}

header("Location: /", true, 301);
exit;

?>