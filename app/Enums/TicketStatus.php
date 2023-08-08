<?php

namespace App\Enums;

enum TicketStatus: string
{
    case Open = "open";
    case Closed = "closed";
    case Pending = "pending";
    case Resolved = "resolved";
}
