<?php

interface FlightReservation
{
    public function calculatePrice(): int;
}


class StandardFlightReservation implements FlightReservation
{
    // Fetch real price from database for example.
    protected const PRICE = 40;

    public function calculatePrice(): int
    {
        return self::PRICE;
    }
}


abstract class FlightReservationDecorator implements FlightReservation
{
    public function __construct(protected FlightReservation $flightReservation)
    {
    }
}


class ExtraMeal extends FlightReservationDecorator
{
    private const PRICE = 10;

    public function calculatePrice(): int
    {
        return $this->flightReservation->calculatePrice() + self::PRICE;
    }
}

class ExtraLuggage extends FlightReservationDecorator
{
    private const PRICE = 20;

    public function calculatePrice(): int
    {
        return $this->flightReservation->calculatePrice() + self::PRICE;
    }
}

/* Testing */
$reservation = new StandardFlightReservation;

// $reservation = new ExtraMeal($reservation);

$reservation = new ExtraLuggage($reservation);

echo 'Your total flight reservation price is $' . $reservation->calculatePrice() . PHP_EOL;