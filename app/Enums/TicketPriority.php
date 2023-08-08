<?php

namespace App\Enums;

enum TicketStatus: string
{
    case High = "high";
    case Medium = "medium";
    case Low = "low";
}
