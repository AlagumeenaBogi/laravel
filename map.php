<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6EANxmzzVVj50H_4JEkFa7NQvMiwBg-M"></script><!----mapv=3.exp&signed_in=true-->

  <div id="map" style="width: 100%; height: 400px;"></div>
<script type="text/javascript">
                var locations = ['Place: <b>Madurai</b>',9.9252007,78.1197754, 1];   
        var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: new google.maps.LatLng(-39.92, 151.25),
                mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        var markers = new Array();
        for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                });
                markers.push(marker);
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                        }
                })(marker, i));
        }
        var bounds = new google.maps.LatLngBounds();
        $.each(markers, function (index, marker) { bounds.extend(marker.position); });
        map.fitBounds(bounds);


</script>
  <?php
/*---MAP_STAET - 27.2.16--------*/

function geocode($place){
   $place = urlencode($place);
    $url = "http://maps.google.com/maps/api/geocode/json?address={$place}";
    $resp_json = file_get_contents($url);
    $resp = json_decode($resp_json, true);
    if($resp['status']=='OK'){
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $geo_location_values_arr=$lati."##".$longi;
       // echo $geo_location_values_arr."<BR>";
        return $geo_location_values_arr;
    }else{
        return false;
    }
}
/*---MAP_END - 27.2.16--------*/
$village_name="chennai";
       $geo_location_value=geocode($village_name);
                                                        $today_geo_display=explode('##',$geo_location_value);
                                                        $latitude= $today_geo_display[0];
                                                        $longitude = $today_geo_display[1];
                                                        //echo "------".$latitude."---".$longitude."<BR>";
                                                        $group_name="Valar";
if($latitude == "")
$latitude = "9.9000";
if($longitude == "")
$longitude = "78.1000";
?>

                                                        <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal" id="reg_place">
                                                        <?=$village_name;?>
                                                        <i class="fa fa-search"></i>
                                                        </a>


                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!----map _start _27.2.16--->
                                    <div class="modal-dialog" style="width:700px;">
                                            <div class="modal-content">
                                                    <div class="modal-body">
                                                    <h3 class="modal-title view-info-underline" id="myModalLabel">
                                                            Group Name: <?=$group_name;?> <BR>
                                                            <span class="text-info"> Village Name: <?=$village_name;?></span>
                                                            <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                                                            <span aria-hidden="true">×</span>
                                                            </button>
                                                    </h3>
                                                    <br>
                                                    <div id="map-canvas" style="width:670px; height:400px;"></div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
  <script>//map _start _27.2.16
var reg;

function initialize() { // Registration place

	var reg_mapOptions = {
	  zoom: 8,
	  center: {lat: <?=$latitude?>, lng: <?=$longitude?>},
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	reg = new google.maps.Map(document.getElementById('map-canvas'), reg_mapOptions);

	var reg_marker = new google.maps.Marker({
	  position: {lat: <?=$latitude?>, lng: <?=$longitude?>},
	  map: reg
	});

	var reg_infowindow = new google.maps.InfoWindow({
	  content: 'Village Name: <b><?=$village_name?></b><BR>Group Name: <b><?=$group_name;?></b>'
	});
	google.maps.event.addListener(reg_marker, 'click', function() {
		reg_infowindow.open(reg, reg_marker);
	});
	//$('#myModal').modal('show');
	$('#reg_place').click(function(){
		$('#myModal').show();
			var reg_currCenter = reg.getCenter();
			google.maps.event.trigger(reg, 'resize');
			reg.setCenter(reg_currCenter);
	});

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  <!--------------alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$ ssh root@192.168.1.5
root@192.168.1.5's password:
Last login: Sat May  6 12:33:59 2017 from 192.168.1.64
[root@madurai41 ~]# /etc/init.d/xrdp_control status
Usage: xrdp_control.sh {start|stop|restart|force-reload}
[root@madurai41 ~]# /etc/init.d/vncserver status
Xvnc is stopped
[root@madurai41 ~]# /etc/init.d/vncserver restart
Shutting down VNC server: 1:user2                          [FAILED]
Starting VNC server: 1:user2
New 'madurai41.ekgaon.com:1 (user2)' desktop is madurai41.ekgaon.com:1

Starting applications specified in /home/user2/.vnc/xstartup
Log file is /home/user2/.vnc/madurai41.ekgaon.com:1.log

                                                           [  OK  ]
[root@madurai41 ~]# /etc/init.d/vncserver restart
Shutting down VNC server: 1:user2                          [  OK  ]
Starting VNC server: 1:user2
New 'madurai41.ekgaon.com:1 (user2)' desktop is madurai41.ekgaon.com:1

Starting applications specified in /home/user2/.vnc/xstartup
Log file is /home/user2/.vnc/madurai41.ekgaon.com:1.log

                                                           [  OK  ]
[root@madurai41 ~]# /sbin/chkconfig vncserver --level=345 on
[root@madurai41 ~]# exit
logout

Connection to 192.168.1.5 closed.
alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$ ssh root@54.254.201.62
root@54.254.201.62's password:

SELECT * FROM `loandisburse` as d, client_info4 as a  WHERE d.`accountno` in (3016200061101,3068700241101,3010900011101,3010900031101,3010900071101,3010900081101,3010900091101,377900021101,377900041101,377900091101,377900101101,377900141101,3124700151101,3124700141101,3124700131101,3124700101101,3124700091101,3124700061101,3114800011101,3114800021101,3114800031101,3114800041101,3114800051101,3114800061101,3114800071101,3114800081101,3114800091101,3114800101101,3114800111101,3114800121101,3114800131101,3114800141101,3114800151101,3115100021101,3115100041101,3115100051101,3115100061101,3115100071101,3115100081101,3115100091101,3115100101101,3115100111101,3115100121101,3115100131101,3115100141101,3115100151101,3115100161101,3115100171101,3115100181101,3115100191101,3115200011101,3051500061101,3127200011101,3127200031101,3127200051101,3127200081101,3127200091101,3127200141101,3127200151101,3127200181101,3127400011101,3127400031101,3127400041101,3127400051101,3127400161101,3128300011101,3128300021101,3128300031101,3128300041101,3128300051101,3128300111101,3128300131101,3127500011101,3127500021101,3127500031101,3127500051101,3127500071101,3127500091101,3127500101101,3127500111101,3127500131101,3127500151101,3128400011101,3128400021101,3128400031101,3128400061101,3128400071101,3128400081101,3128400111101,3128400131101,3128400151101,3128400161101,3128400171101,3128400181101,3128400191101,3131900011101,3131900021101,3131900051101,3131900061101,3131900071101,3131900081101,3131900091101,3131900101101,3131900111101,3131900121101,3131900131101,3131900141101,3131900151101,3131900171101,3131900191101,3131900201101,3131200151101,3131200161101,3131200171101,3131200181101,3131200191101,3131200201101,3131200211101,3131200221101,3131200231101,3131200241101,3131200251101,3131200261101,3131200271101,3131200281101,3131200291101,3130800011101,3130800031101,3130800041101,3130800051101,3130800081101,3130800091101,3130800101101,3130800141101) and d.`client_auto_id`=a.client_id
Last failed login: Sat May  6 14:09:06 IST 2017 from 218.65.30.156 on ssh:notty
There were 2476 failed login attempts since the last successful login.
Last login: Sat May  6 10:31:43 2017 from 220.158.141.22

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
10 package(s) needed for security, out of 12 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-22-198 ~]# df -h
Filesystem      Size  Used Avail Use% Mounted on
/dev/xvda1      7.8G  6.9G  802M  90% /
devtmpfs        490M   56K  490M   1% /dev
tmpfs           498M     0  498M   0% /dev/shm
[root@ip-172-31-22-198 ~]# cd /opt/lampp/htdocs/
[root@ip-172-31-22-198 htdocs]# cd laravel-projects/laravel/
[root@ip-172-31-22-198 laravel]# php artisan serve
Laravel development server started on http://localhost:8000/
Write failed: Broken pipe
alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$
alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$ ^C
alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$ ^C
alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$ ssh root@54.254.201.62
root@54.254.201.62's password: noa12dell
Last failed login: Sat May  6 15:51:37 IST 2017 from 218.65.30.156 on ssh:notty
There were 1036 failed login attempts since the last successful login.
Last login: Sat May  6 14:31:13 2017 from 220.158.141.22

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
10 package(s) needed for security, out of 12 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-22-198 ~]# cd /opt/lampp/htdocs/
[root@ip-172-31-22-198 htdocs]# cd laravel-projects/laravel/

alagumeena@ekgaon-Vost0-Series:/usr/nfs/Trainee/alagumeena$ ssh root@54.254.201.62
root@54.254.201.62's password:
Last failed login: Mon May  8 10:15:39 IST 2017 from 182.100.67.129 on ssh:notty
There were 64332 failed login attempts since the last successful login.
Last login: Sat May  6 17:13:33 2017 from 220.158.141.22

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
10 package(s) needed for security, out of 12 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-22-198 ~]# cd /opt/lampp/htdocs/
[root@ip-172-31-22-198 htdocs]# cd laravel-projects/
[root@ip-172-31-22-198 laravel-projects]# sudo chmod -R 777 laravel
[root@ip-172-31-22-198 laravel-projects]#

[root@ip-172-31-22-198 laravel]#  php artisan key:generate
Application key [aGnvWfDfjuv8xeiKZJgI79Cix28Ovq75] set successfully.
[root@ip-172-31-22-198 laravel]# php artisan serve
Laravel development server started on http://localhost:8000/


https://www.youtube.com/watch?v=2D0oRZLNMoc

https://www.youtube.com/watch?v=UEnxAr6xh4Y

Hi Alagumeena

Please find it for your reference

Composer version 1.4.1

PHP version : 5.6.30

Mysql version :  Ver 15.1 Distrib 10.1.21-MariaDB, for Linux (x86_64) using readline 5.1

http://54.254.201.62/phpinfo.php


http://54.254.201.62/phpmyadmin

username : root

password : dbuser7890


FTP Hostname : 54.254.201.62

FTP username : laravel

FTP password : laravel2014

FTP port. no. 201

http://205.147.103.71/sjdt/modules/equifax_highmark/loan_repayment.php

1.Fixed the issue for loan repayment schedule table update principal amount in local - Completed.

2.Programming for change the code for loan repayment schedule in local - Completed.

3.Programming for  loan repayment schedule table update principal amount in local - Under Process.


3477


https://www.youtube.com/watch?v=8DIH1Xjv7jk

laravel 5 tutorial for login form ubuntu

https://www.youtube.com/watch?v=9JGLUngYjtA


REGISTRATION FORM:
https://www.youtube.com/watch?v=JYyTVvItuNY&spfreload=10

REGISTRATION:
http://cubettech.com/blog/how-to-create-user-registration-form-in-laravel/ (XXXGOOD -IMPORTANT)
oot@ip-172-31-22-198 laravel]# php artisan
Laravel Framework version 5.0.16

Usage:
 [options] command [arguments]

Options:
 --help (-h)           Display this help message
 --quiet (-q)          Do not output any message
 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
 --version (-V)        Display this application version
 --ansi                Force ANSI output
 --no-ansi             Disable ANSI output
 --no-interaction (-n) Do not ask any interactive question
 --env                 The environment the command should run under.

Available commands:
 clear-compiled       Remove the compiled class file
 down                 Put the application into maintenance mode
 env                  Display the current framework environment
 fresh                Remove the scaffolding included with the framework
 help                 Displays help for a command
 inspire              Display an inspiring quote
 list                 Lists commands
 migrate              Run the database migrations
 optimize             Optimize the framework for better performance
 serve                Serve the application on the PHP development server
 tinker               Interact with your application
 up                   Bring the application out of maintenance mode
app
 app:name             Set the application namespace
auth
 auth:clear-resets    Flush expired password reset tokens
cache
 cache:clear          Flush the application cache
 cache:table          Create a migration for the cache database table
config
 config:cache         Create a cache file for faster configuration loading
 config:clear         Remove the configuration cache file
db
 db:seed              Seed the database with records
event
 event:generate       Generate the missing events and handlers based on registration
handler
 handler:command      Create a new command handler class
 handler:event        Create a new event handler class
key
 key:generate         Set the application key
make
 make:command         Create a new command class
 make:console         Create a new Artisan command
 make:controller      Create a new resource controller class
 make:event           Create a new event class
 make:middleware      Create a new middleware class
 make:migration       Create a new migration file
 make:model           Create a new Eloquent model class
 make:provider        Create a new service provider class

https://github.com/laravel/laravel/
 make:request         Create a new form request class
migrate
 migrate:install      Create the migration repository
 migrate:refresh      Reset and re-run all migrations
 migrate:reset        Rollback all database migrations
 migrate:rollback     Rollback the last database migration
 migrate:status       Show a list of migrations up/down
queue
 queue:failed         List all of the failed queue jobs
 queue:failed-table   Create a migration for the failed queue jobs database table
[root@ip-172-31-22-198 laravel]# php artisan --version
Laravel Framework version 5.0.16
[root@ip-172-31-22-198 laravel]# php artisan migrate



  [PDOException]
  SQLSTATE[28000] [1045] Access denied for user 'root'@'54.254.201.62' (using
   password: YES)



[root@ip-172-31-22-198 laravel]# php artisan migration



  [InvalidArgumentException]
  Command "migration" is not defined.
  Did you mean one of these?
      migrate
      migrate:refresh
      migrate:status
      migrate:reset
      migrate:rollback
      migrate:install
      make:migration



[root@ip-172-31-22-198 laravel]# php artisan make:migrate



  [InvalidArgumentException]
  Command "make:migrate" is not defined.
  Did you mean one of these?
      make:migration
      make:controller
      make:middleware
      make:request
      make:provider
      make:console
      make:event
      make:model
      make:command



[root@ip-172-31-22-198 laravel]# php artisan make:migration



  [RuntimeException]
  Not enough arguments.



[root@ip-172-31-22-198 laravel]# ^C

 queue:flush          Flush all of the failed queue jobs
 queue:forget         Delete a failed queue job
 queue:listen         Listen to a given queue
 queue:restart        Restart queue worker daemons after their current job
 queue:retry          Retry a failed queue job
 queue:subscribe      Subscribe a URL to an Iron.io push queue
 queue:table          Create a migration for the queue jobs database table
 queue:work           Process the next job on a queue
route
 route:cache          Create a route cache file for faster route registration
 route:clear          Remove the route cache file
 route:list           List all registered routes
schedule
 schedule:run         Run the scheduled commands
session
 session:table        Create a migration for the session database table
vendor
 vendor:publish       Publish any publishable assets from vendor packages

2001,2021,2008 (311800020)

php artisan migrate:status
php artisan migrate:install
[root@ip-172-31-22-198 laravel]# php artisan migrate:status
 [PDOException]
  SQLSTATE[28000] [1045] Access denied for user 'root'@'54.254.201.62' (using
   password: YES)
[root@ip-172-31-22-198 laravel]# php artisan migrate:status
No migrations found.
[root@ip-172-31-22-198 laravel]# php artisan migrate:install
Migration table created successfully.

https://www.youtube.com/watch?v=EfMxVXlMcVE&list=PLZU0qJlzY07WNbXipe1R8lUI-QLhGzwnt

alagumeena@ekgaon-server:/usr/nfs/Trainee/alagumeena$ ssh root@54.254.201.62
root@54.254.201.62's password:
Last failed login: Sat May 20 12:45:02 IST 2017 from 116.31.116.16 on ssh:notty
There were 30566 failed login attempts since the last successful login.
Last login: Wed May 17 17:05:16 2017 from 220.158.141.22

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
14 package(s) needed for security, out of 19 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-22-198 ~]# cd /opt/lampp/htdocs/
[root@ip-172-31-22-198 htdocs]# cd laravel
[root@ip-172-31-22-198 laravel]# grap -r "welcome"
-bash: grap: command not found
[root@ip-172-31-22-198 laravel]# grap -r "app.php"
-bash: grap: command not found
[root@ip-172-31-22-198 laravel]# grep -r "app.php"
public/index.php:$app = require_once __DIR__.'/../bootstrap/app.php';
artisan:$app = require_once __DIR__.'/bootstrap/app.php';
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/ServerBag.php:             * RewriteRule ^(.*)$ app.php [QSA,L]
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:        ## assume rewrite rule: (.*) -- app/app.php ; app/ is a symlink to a symfony web/ directory
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                'SCRIPT_FILENAME' => '/var/www/www.test.com/app/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                'SCRIPT_NAME' => '/app/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                'PHP_SELF' => '/app/app.php/apparthotel-1234',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_FILENAME' => '/home/John Doe/public_html/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_NAME' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'PHP_SELF' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_FILENAME' => '/home/John Doe/public_html/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_NAME' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'PHP_SELF' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                '/foo%20bar/app.php/home',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_FILENAME' => '/home/John Doe/public_html/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_NAME' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'PHP_SELF' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                '/foo%20bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                '/foo%20bar/app.php/home%3Dbaz',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_FILENAME' => '/home/John Doe/public_html/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_NAME' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'PHP_SELF' => '/foo bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                '/foo%20bar/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_FILENAME' => '/home/John Doe/public_html/foo/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'SCRIPT_NAME' => '/foo/app.php',
vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Tests/RequestTest.php:                    'PHP_SELF' => '/foo/app.php',
vendor/symfony/routing/Symfony/Component/Routing/Matcher/Dumper/ApacheMatcherDumper.php:     *  * script_name: The script name (app.php by default)
vendor/symfony/routing/Symfony/Component/Routing/Matcher/Dumper/ApacheMatcherDumper.php:            'script_name' => 'app.php',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:foo,E=_ROUTING_param_bar:%1,E=_ROUTING_default_def:test]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:foobar,E=_ROUTING_param_bar:%1,E=_ROUTING_default_bar:toto]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:bar,E=_ROUTING_param_foo:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baragain,E=_ROUTING_param_foo:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz2]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz3]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz4,E=_ROUTING_param_foo:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz5,E=_ROUTING_param_foo:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz5unsafe,E=_ROUTING_param_foo:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz6,E=_ROUTING_default_foo:bar\ baz]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz7]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz8]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:baz9,E=_ROUTING_param_baz:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route2]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route3]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route4]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route5]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route6]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route11,E=_ROUTING_param_var1:%{ENV:__ROUTING_host_5_var1}]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route12,E=_ROUTING_param_var1:%{ENV:__ROUTING_host_5_var1},E=_ROUTING_default_var1:val]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route13,E=_ROUTING_param_var1:%{ENV:__ROUTING_host_5_var1},E=_ROUTING_param_name:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route14,E=_ROUTING_param_var1:%{ENV:__ROUTING_host_5_var1},E=_ROUTING_param_name:%1,E=_ROUTING_default_var1:val]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route15,E=_ROUTING_param_name:%1]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route16,E=_ROUTING_param_name:%1,E=_ROUTING_default_var1:val]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L,E=_ROUTING_route:route17]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Fixtures/dumper/url_matcher1.apache:RewriteRule .* app.php [QSA,L]
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://localhost/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('https://localhost/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://localhost:8080/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('https://localhost:8080/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing/bar', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing/0', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/index/1', $this->getGenerator($routes)->generate('test', array('page' => 1)));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing?foo=bar', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://localhost/app.php/testing?foo=bar', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://localhost/app.php/testing', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $context = new RequestContext('/app.php');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing?foo=bar', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $context = new RequestContext('/app.php');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/testing/bar', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $context = new RequestContext('/app.php');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/de', $url);
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/testing/bar', $generator->generate('test', array('foo' => 'bar')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/', $this->getGenerator($routes, array('scheme' => 'https'))->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/', $this->getGenerator($routes, array('scheme' => 'https'))->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('https://localhost/app.php/', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://localhost/app.php/', $this->getGenerator($routes, array('scheme' => 'https'))->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('https://localhost/app.php/', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://localhost/app.php/', $this->getGenerator($routes, array('scheme' => 'https'))->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('ftp://localhost/app.php/', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/category/foo', $this->getGenerator($routes)->generate('test', array('slug1' => 'foo')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/foo', $this->getGenerator($routes)->generate('test', array('default' => 'foo')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/test', $this->getGenerator($routes)->generate('test', array('default' => null)));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/test', $this->getGenerator($routes)->generate('test', array('default' => 'foo')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/test', $this->getGenerator($routes)->generate('test', array('default' => 'value')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/test', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/bar', $this->getGenerator($routes)->generate('$péß^a|'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/@:%5B%5D/%28%29*%27%22%20+,;-._~%26%24%3C%3E|%7B%7D%25%5C%5E%60!%3Ffoo=bar%23id'
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/dir/%2E%2E/dir/%2E%2E', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/dir/%2E/dir/%2E', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/a./.a/a../..a/...', $this->getGenerator($routes)->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/foo123', $generator->generate('test', array('x' => 'foo', 'y' => '123')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/foo123bar.xml', $generator->generate('test', array('x' => 'foo', 'y' => '123', 'z' => 'bar', '_format' => 'xml')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/get', $generator->generate('test'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/getSites', $generator->generate('test', array('what' => 'Sites')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/getSitesSuffix', $generator->generate('test', array('what' => 'Sites')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('/app.php/index.mobile.html', $generator->generate('test', array('page' => 'index', '_format' => 'mobile.html')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('//fr.example.com/app.php/Fabien', $this->getGenerator($routes)->generate('test', array('name' => 'Fabien', 'locale' => 'fr')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('/app.php/Fabien', $this->getGenerator($routes, array('host' => 'fr.example.com'))->generate('test', array('name' => 'Fabien', 'locale' => 'fr')));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertEquals('http://fr.example.com/app.php/Fabien', $this->getGenerator($routes, array('host' => 'fr.example.com'))->generate('test', array('name' => 'Fabien', 'locale' => 'fr'), true));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('//fr.example.com/app.php/Fabien', $this->getGenerator($routes)->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('//fr.example.com/app.php/Fabien?query=string', $this->getGenerator($routes, array('host' => 'fr.example.com'))->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('http://fr.example.com/app.php/Fabien', $this->getGenerator($routes, array('scheme' => 'https'))->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('http://fr.example.com/app.php/Fabien', $this->getGenerator($routes)->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('//fr.example.com/app.php/Fabien', $this->getGenerator($routes)->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('//fr.example.com/app.php/Fabien?query=string', $this->getGenerator($routes, array('host' => 'fr.example.com'))->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('http://fr.example.com/app.php/Fabien', $this->getGenerator($routes, array('scheme' => 'https'))->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('http://fr.example.com/app.php/Fabien', $this->getGenerator($routes)->generate('test',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('//bernhard.example.com/app.php/forms-are-great', $generator->generate('host',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('https://example.com/app.php/bernhard', $generator->generate('schemeBC',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $this->assertSame('https://example.com/app.php/bernhard/blog', $generator->generate('scheme',
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/UrlGeneratorTest.php:        $context = new RequestContext('/app.php');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $projectUrlGenerator = new \ProjectUrlGenerator(new RequestContext('/app.php'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($absoluteUrlWithParameter, 'http://localhost/app.php/testing/bar');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($absoluteUrlWithoutParameter, 'http://localhost/app.php/testing2');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($relativeUrlWithParameter, '/app.php/testing/bar');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($relativeUrlWithoutParameter, '/app.php/testing2');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $projectUrlGenerator = new \WithoutRoutesUrlGenerator(new RequestContext('/app.php'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $projectUrlGenerator = new \SchemeUrlGenerator(new RequestContext('/app.php'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($absoluteUrl, 'ftp://localhost/app.php/testing');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($absoluteUrlBC, 'https://localhost/app.php/testing_bc');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($relativeUrl, 'ftp://localhost/app.php/testing');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($relativeUrlBC, 'https://localhost/app.php/testing_bc');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $projectUrlGenerator = new \SchemeUrlGenerator(new RequestContext('/app.php', 'GET', 'localhost', 'https'));
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($absoluteUrl, 'https://localhost/app.php/testing');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($absoluteUrlBC, 'https://localhost/app.php/testing_bc');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($relativeUrl, '/app.php/testing');
vendor/symfony/routing/Symfony/Component/Routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php:        $this->assertEquals($relativeUrlBC, '/app.php/testing_bc');
vendor/symfony/routing/Symfony/Component/Routing/Tests/RequestContextTest.php:        $this->assertSame($requestContext, $requestContext->setBaseUrl('/app.php'));
vendor/laravel/framework/src/Illuminate/Foundation/Console/AppNameCommand.php:	 * Get the path to the bootstrap/app.php file.
vendor/laravel/framework/src/Illuminate/Foundation/Console/AppNameCommand.php:	return $this->laravel['path.base'].'/bootstrap/app.php';
vendor/laravel/framework/src/Illuminate/Foundation/Console/ConfigCacheCommand.php:		$app = require $this->laravel['path.base'].'/bootstrap/app.php';
vendor/laravel/framework/src/Illuminate/Foundation/Console/RouteCacheCommand.php:		$app = require $this->laravel['path.base'].'/bootstrap/app.php';
tests/TestCase.php:		$app = require __DIR__.'/../bootstrap/app.php';
[root@ip-172-31-22-198 laravel]# grep -r "welcome"
app/Http/Controllers/WelcomeController.php:	 * Show the application welcome screen to the user.
app/Http/Controllers/WelcomeController.php:		return view('welcome');
vendor/phpunit/phpunit/CONTRIBUTING.md:Contributions to PHPUnit, its related modules, and its documentation are always welcome. You make our lives easier by sending us your contributions through GitHub pull requests.
vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:    /** Send the HELO welcome */
vendor/swiftmailer/swiftmailer/doc/introduction.rst:Annesley and Christopher Thompson. This has been an extremely welcome change.
vendor/swiftmailer/swiftmailer/notes/rfc/rfc2487.txt:   S: 250-mail.imc.org offers a warm hug of welcome


https://www.slideshare.net/vikaskimt/laravel-beginners-tutorial-1
https://www.youtube.com/watch?v=riiKdN67y1U&list=PLZU0qJlzY07WNbXipe1R8lUI-QLhGzwnt&index=3


http://www.findalltogether.com/category/laravel/
https://github.com/bestmomo/laravel5-example
http://www.findalltogether.com/category/laravel/
https://www.slideshare.net/ShahrzadPeyman/object-oriented-programming-with-laravel-session-5?qid=eb8c1e88-2f4c-4c5f-a12d-6b056a30377a&v=&b=&from_search=1


***********************************************************************************************************************************************************************************************************************
alagumeena@ekgaon-server:/usr/nfs/Trainee/alagumeena$ ssh root@13.228.30.89
root@13.228.30.89's password:
Last login: Fri Jun 30 04:35:43 2017

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
4 package(s) needed for security, out of 6 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-31-229 ~]# cd /opt/lampp/htdocs
[root@ip-172-31-31-229 htdocs]# ls
applications.html  favicon.ico  laravel-projects       webalizer
bitnami.css        img          phpinfo.php
dashboard          index.php    tamil_latter_link.txt
[root@ip-172-31-31-229 htdocs]# php artisan list
Could not open input file: artisan
[root@ip-172-31-31-229 htdocs]# php artisan help migrate
Could not open input file: artisan
[root@ip-172-31-31-229 htdocs]# laravel
-bash: laravel: command not found
[root@ip-172-31-31-229 htdocs]# cd /opt/lampp/htdocs
[root@ip-172-31-31-229 htdocs]# cd laravel
-bash: cd: laravel: No such file or directory
[root@ip-172-31-31-229 htdocs]# cd laravel
-bash: cd: laravel: No such file or directory
[root@ip-172-31-31-229 htdocs]# cd var/www/html
-bash: cd: var/www/html: No such file or directory
[root@ip-172-31-31-229 htdocs]# exit
logout
Connection to 13.228.30.89 closed.

&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
alagumeena@ekgaon-server:/usr/nfs/Trainee/alagumeena$ ssh root@13.228.30.89
root@13.228.30.89's password:
Last login: Fri Jun 30 04:49:44 2017

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
4 package(s) needed for security, out of 6 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-31-229 ~]# cd var/www/html
-bash: cd: var/www/html: No such file or directory
[root@ip-172-31-31-229 ~]# cd /var/www/html
[root@ip-172-31-31-229 html]# li
-bash: li: command not found
[root@ip-172-31-31-229 html]# ls
index.html  laravel  phpmyadmin  webmin-1.840  webmin-1.840.tar.gz
[root@ip-172-31-31-229 html]# cd laravel
[root@ip-172-31-31-229 laravel]# php artisan list
Laravel Framework version 5.0.16

Usage:
 [options] command [arguments]

Options:
 --help (-h)           Display this help message
 --quiet (-q)          Do not output any message
 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
 --version (-V)        Display this application version
 --ansi                Force ANSI output
 --no-ansi             Disable ANSI output
 --no-interaction (-n) Do not ask any interactive question
 --env                 The environment the command should run under.

Available commands:
 clear-compiled       Remove the compiled class file
 down                 Put the application into maintenance mode
 env                  Display the current framework environment
 fresh                Remove the scaffolding included with the framework
 help                 Displays help for a command
 inspire              Display an inspiring quote
 list                 Lists commands
 migrate              Run the database migrations
 optimize             Optimize the framework for better performance
 serve                Serve the application on the PHP development server
 tinker               Interact with your application
 up                   Bring the application out of maintenance mode
app
 app:name             Set the application namespace
auth
 auth:clear-resets    Flush expired password reset tokens
cache
 cache:clear          Flush the application cache
 cache:table          Create a migration for the cache database table
config
 config:cache         Create a cache file for faster configuration loading
 config:clear         Remove the configuration cache file
db
 db:seed              Seed the database with records
event
 event:generate       Generate the missing events and handlers based on registration
handler
 handler:command      Create a new command handler class
 handler:event        Create a new event handler class
key
 key:generate         Set the application key
make
 make:command         Create a new command class
 make:console         Create a new Artisan command
 make:controller      Create a new resource controller class
 make:event           Create a new event class
 make:middleware      Create a new middleware class
 make:migration       Create a new migration file
 make:model           Create a new Eloquent model class
 make:provider        Create a new service provider class
 make:request         Create a new form request class
migrate
 migrate:install      Create the migration repository
 migrate:refresh      Reset and re-run all migrations
 migrate:reset        Rollback all database migrations
 migrate:rollback     Rollback the last database migration
 migrate:status       Show a list of migrations up/down
queue
 queue:failed         List all of the failed queue jobs
 queue:failed-table   Create a migration for the failed queue jobs database table
 queue:flush          Flush all of the failed queue jobs
 queue:forget         Delete a failed queue job
 queue:listen         Listen to a given queue
 queue:restart        Restart queue worker daemons after their current job
 queue:retry          Retry a failed queue job
 queue:subscribe      Subscribe a URL to an Iron.io push queue
 queue:table          Create a migration for the queue jobs database table
 queue:work           Process the next job on a queue
route
 route:cache          Create a route cache file for faster route registration
 route:clear          Remove the route cache file
 route:list           List all registered routes
schedule
 schedule:run         Run the scheduled commands
session
 session:table        Create a migration for the session database table
vendor
 vendor:publish       Publish any publishable assets from vendor packages
[root@ip-172-31-31-229 laravel]# ^C
[root@ip-172-31-31-229 laravel]# ^C
[root@ip-172-31-31-229 laravel]#

****************************************************************************************************************************************************************

hello  GNU nano 2.5.3              File: httpd.conf                        Modified

# it explicitly to prevent problems during startup.
#
# If your host doesn't have a registered DNS name, enter its IP address here.
#
#ServerName www.example.com:80

#
# Deny access to the entirety of your server's filesystem. You must
# explicitly permit access to web content directories in other
# <Directory> blocks below.
#
<Directory />
    AllowOverride none
    Require all denied
</Directory>

#
# Note that from this point forward you must specifically allow
# particular features to be enabled - so if something's not working as
  GNU nano 2.5.3              File: httpd.conf                        Modified

    # http://httpd.apache.org/docs/2.4/mod/core.html#options
    # for more information.
    #
    Options Indexes FollowSymLinks

    #
    # AllowOverride controls what directives may be placed in .htaccess files.
    # It can be "All", "None", or any combination of the keywords:
    #   Options FileInfo AuthConfig Limit
    #
#    AllowOverride None
AllowOverride All

    #
    # Controls who can get stuff from this server.
    #
    Require all granted
</Directory>


^G Get Help  ^O Write Out ^W Where Is  ^K Cut Text  ^J Justify   ^C Cur Pos
^X Exit      ^R Read File ^\ Replace   ^U Uncut Text^T To Spell  ^_ Go To Line
***********************************************************************************************************************

@extends ('layouts.plane')
@include('widgets.panel', array('as'=>'login', 'header'=>true)) --INCLUDE PATH AND RESUABLE CODE
@section ('body') ,@section ('login_panel_title','Please Sign In'),@section ('login_panel_body'),@endsection ---its is define
@yield(),@stop ---its is show
widgets -----------panel display

return View::make('login');//return view("login");
 <input type="hidden" name="_token" value="{{csrf_token()}}">

https://www.youtube.com/watch?v=cccUdsONu28
https://www.youtube.com/watch?v=8DIH1Xjv7jk

https://www.youtube.com/watch?v=8DIH1Xjv7jk

*******************************************************************************************************************************************************
alagumeena@ekgaon-server:/usr/nfs/Trainee/alagumeena$ ssh root@13.228.30.89
noaroot@13.228.30.89's password:
exPermission denied, please try again.
root@13.228.30.89's password:
Last failed login: Fri Jun 30 05:48:18 UTC 2017 from 61.177.172.59 on ssh:notty
There were 481 failed login attempts since the last successful login.
Last login: Fri Jun 30 04:50:35 2017 from 220.158.141.22

       __|  __|_  )
       _|  (     /   Amazon Linux AMI
      ___|\___|___|

https://aws.amazon.com/amazon-linux-ami/2017.03-release-notes/
4 package(s) needed for security, out of 6 available
Run "sudo yum update" to apply all updates.
[root@ip-172-31-31-229 ~]# cd /var/www/html
[root@ip-172-31-31-229 html]# cd laravel
[root@ip-172-31-31-229 laravel]# sudo chmod -R 777 laravel
chmod: cannot access ‘laravel’: No such file or directory
[root@ip-172-31-31-229 laravel]# sudo chmod -R 777
chmod: missing operand after ‘777’
Try 'chmod --help' for more information.
[root@ip-172-31-31-229 laravel]# cd /var/www/html
[root@ip-172-31-31-229 html]# sudo chmod -R 777 laravel
[root@ip-172-31-31-229 html]#


View [left_menu] not found. (View: /var/www/html/laravel/resources/views/form.blade.php)


router
dashboard
form
stylee
customer_module.js
plane
customercountroller
BIYPA0421L 9653-4038-0934


13.6.17 ---8.16
27.6.17 ---

sk - sa  ================================>DONE
so - sa,pf,per,lea,bf
ni - timec
vi - mail
mv - pays,esi

ta - onion

ls - bu

sp - k,p,sa,cs


sa,pf,per,lea,bf

sir


--------------> 
