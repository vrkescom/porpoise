<?php
namespace Porpoise;

interface Observer
{
    function update($event_info = null);
}