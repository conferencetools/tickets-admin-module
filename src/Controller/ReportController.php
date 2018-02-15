<?php

namespace ConferenceTools\TicketsAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use ConferenceTools\Tickets\Report\ReportManager;

class ReportController extends AbstractActionController
{
    /**
     * @var ReportManager
     */
    private $reportManager;

    /**
     * ReportController constructor.
     */
    public function __construct(ReportManager $reportManager)
    {
        $this->reportManager = $reportManager;
    }

    public function indexAction()
    {

    }
}
