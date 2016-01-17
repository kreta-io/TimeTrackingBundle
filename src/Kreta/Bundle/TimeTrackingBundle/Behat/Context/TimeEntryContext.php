<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kreta\Bundle\TimeTrackingBundle\Behat\Context;

use Behat\Gherkin\Node\TableNode;
use Kreta\Bundle\CoreBundle\Behat\Context\DefaultContext;

/**
 * Class TimeEntryContext.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class TimeEntryContext extends DefaultContext
{
    /**
     * Populates the database with time entries.
     *
     * @param \Behat\Gherkin\Node\TableNode $timeEntries The time entries
     *
     *
     * @Given /^the following time entries exist:$/
     */
    public function theFollowingTimeEntriesExist(TableNode $timeEntries)
    {
        foreach ($timeEntries as $timeEntryData) {
            $issue = $this->get('kreta_issue.repository.issue')
                ->findOneBy(['title' => $timeEntryData['issue']], false);

            $timeEntry = $this->get('kreta_time_tracking.factory.time_entry')->create($issue);
            $timeEntry
                ->setDescription($timeEntryData['description'])
                ->setTimeSpent($timeEntryData['timeSpent']);
            if (isset($timeEntryData['dateReported'])) {
                $this->setField($timeEntry, 'dateReported', new \DateTime($timeEntryData['dateReported']));
            }
            if (isset($timeEntryData['id'])) {
                $this->setId($timeEntry, $timeEntryData['id']);
            }

            $this->get('kreta_time_tracking.repository.time_entry')->persist($timeEntry);
        }
    }
}
