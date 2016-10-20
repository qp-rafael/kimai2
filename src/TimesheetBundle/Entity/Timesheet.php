<?php

/*
 * This file is part of the Kimai package.
 *
 * (c) Kevin Papst <kevin@kevinpapst.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TimesheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timesheet entity.
 *
 * @ORM\Entity(repositoryClass="TimesheetBundle\Repository\TimesheetRepository")
 * @ORM\Table(name="timeSheet", indexes={@ORM\Index(name="userID", columns={"userID"}), @ORM\Index(name="projectID", columns={"projectID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 *
 * @author Kevin Papst <kevin@kevinpapst.de>
 */
class Timesheet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="start", type="integer", nullable=false)
     */
    private $start = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="end", type="integer", nullable=false)
     */
    private $end = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userID", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="projectID", type="integer", nullable=false)
     */
    private $projectid;

    /**
     * @var integer
     *
     * @ORM\Column(name="activityID", type="integer", nullable=false)
     */
    private $activityid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="commentType", type="boolean", nullable=false)
     */
    private $commenttype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cleared", type="boolean", nullable=false)
     */
    private $cleared = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="trackingNumber", type="string", length=30, nullable=true)
     */
    private $trackingnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $rate = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fixedRate", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $fixedrate = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="budget", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $approved;

    /**
     * @var integer
     *
     * @ORM\Column(name="statusID", type="smallint", nullable=false)
     */
    private $statusid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="billable", type="boolean", nullable=true)
     */
    private $billable;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeEntryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $timeentryid;



    /**
     * Set start
     *
     * @param integer $start
     *
     * @return KimaiTimesheet
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return integer
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param integer $end
     *
     * @return KimaiTimesheet
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return integer
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return KimaiTimesheet
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return KimaiTimesheet
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set projectid
     *
     * @param integer $projectid
     *
     * @return KimaiTimesheet
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
    }

    /**
     * Get projectid
     *
     * @return integer
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * Set activityid
     *
     * @param integer $activityid
     *
     * @return KimaiTimesheet
     */
    public function setActivityid($activityid)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return integer
     */
    public function getActivityid()
    {
        return $this->activityid;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return KimaiTimesheet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return KimaiTimesheet
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set commenttype
     *
     * @param boolean $commenttype
     *
     * @return KimaiTimesheet
     */
    public function setCommenttype($commenttype)
    {
        $this->commenttype = $commenttype;

        return $this;
    }

    /**
     * Get commenttype
     *
     * @return boolean
     */
    public function getCommenttype()
    {
        return $this->commenttype;
    }

    /**
     * Set cleared
     *
     * @param boolean $cleared
     *
     * @return KimaiTimesheet
     */
    public function setCleared($cleared)
    {
        $this->cleared = $cleared;

        return $this;
    }

    /**
     * Get cleared
     *
     * @return boolean
     */
    public function getCleared()
    {
        return $this->cleared;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return KimaiTimesheet
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set trackingnumber
     *
     * @param string $trackingnumber
     *
     * @return KimaiTimesheet
     */
    public function setTrackingnumber($trackingnumber)
    {
        $this->trackingnumber = $trackingnumber;

        return $this;
    }

    /**
     * Get trackingnumber
     *
     * @return string
     */
    public function getTrackingnumber()
    {
        return $this->trackingnumber;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return KimaiTimesheet
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set fixedrate
     *
     * @param string $fixedrate
     *
     * @return KimaiTimesheet
     */
    public function setFixedrate($fixedrate)
    {
        $this->fixedrate = $fixedrate;

        return $this;
    }

    /**
     * Get fixedrate
     *
     * @return string
     */
    public function getFixedrate()
    {
        return $this->fixedrate;
    }

    /**
     * Set budget
     *
     * @param string $budget
     *
     * @return KimaiTimesheet
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set approved
     *
     * @param string $approved
     *
     * @return KimaiTimesheet
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set statusid
     *
     * @param integer $statusid
     *
     * @return KimaiTimesheet
     */
    public function setStatusid($statusid)
    {
        $this->statusid = $statusid;

        return $this;
    }

    /**
     * Get statusid
     *
     * @return integer
     */
    public function getStatusid()
    {
        return $this->statusid;
    }

    /**
     * Set billable
     *
     * @param boolean $billable
     *
     * @return KimaiTimesheet
     */
    public function setBillable($billable)
    {
        $this->billable = $billable;

        return $this;
    }

    /**
     * Get billable
     *
     * @return boolean
     */
    public function getBillable()
    {
        return $this->billable;
    }

    /**
     * Get timeentryid
     *
     * @return integer
     */
    public function getTimeentryid()
    {
        return $this->timeentryid;
    }
}