<?php


namespace bmwx591\yrl;


class RoomOffer extends BaseOffer
{
    protected $roomsOffered;

    /**
     * @return mixed
     */
    public function getRoomsOffered()
    {
        return $this->roomsOffered;
    }

    /**
     * @param mixed $roomsOffered
     * @return $this
     */
    public function setRoomsOffered($roomsOffered)
    {
        $this->roomsOffered = $roomsOffered;
        return $this;
    }
}
