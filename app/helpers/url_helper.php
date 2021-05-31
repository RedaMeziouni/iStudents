<?php

// Simple page redirect
function redirect($page)
{
  header('location: ' . URLROOT . '/' . $page);
}

function alerte($message)
{
  return "<script> alert(" . $message . ")</script>";
}

// Chek if user is Admin
function isAdmin()
{
  if (intval($_SESSION['user_role']) == 1) {
    return true;
  } else {
    return false;
  }
}