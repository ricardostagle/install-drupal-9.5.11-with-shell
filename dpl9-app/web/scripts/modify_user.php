<?php

use Drupal\user\Entity\User;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\DrupalKernel;

print '-------------------------' . PHP_EOL ;
print 'Modify User Starting...'  . PHP_EOL ;
print '=========================' . PHP_EOL ;

//$user = user_load_by_name('adminuser2');
$user = user_load_by_mail('adminuser3@gmail.com');
$mail = $user->getEmail();
if(!empty($user)){
  $uid = $user->id();
  echo 'User <pre>'.print_r($uid,true).'</pre>' . PHP_EOL ;
  $rids = $user->getRoles();
  if (in_array("administrator", $rids) and $mail == 'adminuser3@gmail.com') {
    echo "Remove admin role for the user". PHP_EOL ;
    $user->removeRole('administrator');
    $user->save();
    echo "Saved change for user, Removed role". PHP_EOL ;
  }
  
  // Load user again and verify new roles.
  $user = user_load_by_mail('adminuser3@gmail.com');
  $rids = $user->getRoles();
  echo 'User <pre>'.print_r($rids,true).'</pre>' . PHP_EOL ;

  // Let content created for this user.
  user_cancel([], $uid, 'user_cancel_reassign');

  // Delete user
  $account = User::load($uid);
  //$account->delete();
  //$user->delete();
  print 'Delete User with mail '. $account->getEmail(). PHP_EOL ;
}

print '-------------------------' . PHP_EOL ;
print 'Modified User Completed.'  . PHP_EOL ;
print '=========================' . PHP_EOL ;