<?php
/**
 * Created by PhpStorm.
 * User: Ilie
 * Date: 21/2/2016
 * Time: 7:53 PM
 */

namespace AppBundle\Service;


class DataValidatorService
{
    /** @const string */
    const SERVICE_NAME = 'app.data_validator';

    /**
     * Validates if the start date and end date are valid dates
     * @param array $data
     * @return bool
     */
    public function validate($data = array())
    {
        $valid = true;
        if (isset($data['start_date'])) {
            $valid = $this->validateDate($data['start_date']);
        }
        if (isset($data['end_date'])) {
            $valid = $this->validateDate($data['end_date']);
        }

        return $valid;
    }

    /**
     * @param string $dateString
     * @return bool
     */
    protected function validateDate($dateString)
    {
        try {
            $date = new \DateTime($dateString);
        } catch (\Exception $ex) {
            return false;
        }

        return true;
    }
}