<?php

function UserName(){
  return Auth::user()->name;
}