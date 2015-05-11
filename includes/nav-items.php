<?php

$menu = array(
	array('Home', '/', '_self'),
	array('About us', 'about-us', '_self'),
	array('Solutions', array(
		array('IT Services', array(
			array('Computer Repair', 'computer-repair', '_self'),
			array('Computer Networks', 'computer-networking', '_self'),
			array('Computers &amp; Servers', 'computers-servers', '_self'),
			array('IT Support Services', 'support-services', '_self'),
			array('Managed IT Services', 'managed-services', '_self'),
			array('Network Security', 'network-security', '_self')
		)),
		array('IT Services', array(
			array('Remote Access', 'remote-access', '_self'),
			array('Data Backup/Recovery', 'data-backup-disaster-recovery', '_self'),
			array('Digital Video Surveillance', 'camera-systems-digital-video-surveillance', '_self'),
			array('Premise Data Wiring', 'network-wiring', '_self'),
			array('Wireless Networking', 'wireless-networking', '_self')
		)),
		array('Web Services', array(
			array('Website Design', 'website-design-web-development', '_self'),
			array('E-Commerce', 'ecommerce-sites-shopping-carts', '_self'),
			array('Web Hosting', 'web-hosting', '_self'),
			array('Search Engine Optimization (SEO)', 'seo-search-engine-optimization', '_self'),
			array('Search Engine Marketing (SEM)', 'sem-search-engine-marketing', '_self')
		)),
		array('Software Services', array(
			array('Software Development', 'software-developers-programmers', '_self'),
			array('Database Development', 'database-developers-programmers', '_self'),
			array('Data Analysis &amp; Reports', 'data-analysis-reports', '_self')
		))
	)),
	array('Contact', 'contact', '_self'),
	array('Support <i class="fa fa-external-link"></i>', 'http://remote.infoworkz.com:8040/', '_blank')
);