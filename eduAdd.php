<?php
	require_once 'jobseeker.php';

	$profileId = $_POST['profile-id'];
	$level = $_POST['level'];
	$passedYear = $_POST['passed-year'];
	$institute = $_POST['institute'];
	$score = $_POST['score'];
	$major = $_POST['major'];
	$board = $_POST['board'];

	$job = new Jobseeker();
	$job->setProfileId($profileId);
	$job->setLevel($level);
	$job->setPassedYear($passedYear);
	$job->setInstitute($institute);
	$job->setScore($score);
	$job->setMajor($major);
	$job->setBoard($board);

	if($job->insertEducation()){
		$list = $job->getEducation();
		echo json_encode($list);
	}
	