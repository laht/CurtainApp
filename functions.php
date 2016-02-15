<?php

if ($_GET["direction"] == "up") {
	exec("sudo /usr/bin/python forward.py");
}

if ($_GET["direction"] == "down") {
	exec("sudo /usr/bin/python backward.py");
}

if ($_GET["direction"] == "stop") {
	exec("sudo /usr/bin/python stop.py");
}

