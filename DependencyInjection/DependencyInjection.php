<?php

class University {

    protected String $uName;
    protected int $uId;

    /**
     * @param String $uName
     * @param int $uId
     */
    public function __construct(string $uName, int $uId)
    {
        $this->uName = $uName;
        $this->uId = $uId;
    }

    /**
     * @return String
     */
    public function getUName(): string
    {
        return $this->uName;
    }

    /**
     * @param String $uName
     */
    public function setUName(string $uName): void
    {
        $this->uName = $uName;
    }

    /**
     * @return int
     */
    public function getUId(): int
    {
        return $this->uId;
    }

    /**
     * @param int $uId
     */
    public function setUId(int $uId): void
    {
        $this->uId = $uId;
    }


}

class Student extends University {

    protected int $sId;

    /**
     * @param int $sId
     */
    public function __construct(int $sId, University $u)
    {
        $this->sId = $sId;
        $this->uName = $u->uName;
        $this->uId = $u->uId;
    }

    /**
     * @return int
     */
    public function getSId(): int
    {
        return $this->sId;
    }

    /**
     * @param int $sId
     */
    public function setSId(int $sId): void
    {
        $this->sId = $sId;
    }


}

$uni1 = new University("University of Bucharest", 234);
$stu1 = new Student(5554, $uni1);
echo $uni1->getUName() . " <br>";
echo $uni1->getUId() . " <br>";
echo $stu1->getSId() . " <br>";