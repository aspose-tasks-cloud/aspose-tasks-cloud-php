<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetRiskAnalysisReportRequest.php">
 *   Copyright (c) 2018 Aspose.Tasks for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
namespace Aspose\Tasks\Model\Requests;

/*
 * Request model for getRiskAnalysisReport" operation.
 */
class GetRiskAnalysisReportRequest
{
    /*
     * Initializes a new instance of the GetRiskAnalysisReportRequest class.
     *  
     * @param string $name The name of the file.
     * @param int $task_uid The uid of the task for which this risk will be applied in Monte Carlo simulation.
     * @param string $distribution_type Gets or sets the probability distribution used in Monte Carlo simulation. The default value is ProbabilityDistributionType.Normal.
     * @param int $optimistic The percentage of the most likely task duration which can happen in the best possible project scenario. The default value is 75, which means that if the estimated specified task duration is 4 days then the optimistic duration will be 3 days.
     * @param int $pessimistic The percentage of the most likely task duration which can happen in the worst possible project scenario. The default value is 125, which means that if the estimated specified task duration is 4 days then the pessimistic duration will be 5 days.
     * @param string $confidence_level Gets or sets the confidence level that correspond to the percentage of the time the actual generated values will be within optimistic and pessimistic estimates. The default value is CL99.
     * @param int $iterations The number of iterations to use in Monte Carlo simulation. The default value is 100.
     * @param string $storage The document storage.
     * @param string $folder The folder storage.
     * @param string $file_name The resulting report fileName.
     */
    public function __construct($name, $task_uid, $distribution_type = null, $optimistic = null, $pessimistic = null, $confidence_level = null, $iterations = null, $storage = null, $folder = null, $file_name = null)             
    {
        $this->name = $name;
        $this->task_uid = $task_uid;
        $this->distribution_type = $distribution_type;
        $this->optimistic = $optimistic;
        $this->pessimistic = $pessimistic;
        $this->confidence_level = $confidence_level;
        $this->iterations = $iterations;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->file_name = $file_name;
    }

    /*
     * The name of the file.
     */
    public $name;
	
    /*
     * The uid of the task for which this risk will be applied in Monte Carlo simulation.
     */
    public $task_uid;
	
    /*
     * Gets or sets the probability distribution used in Monte Carlo simulation. The default value is ProbabilityDistributionType.Normal.
     */
    public $distribution_type;
	
    /*
     * The percentage of the most likely task duration which can happen in the best possible project scenario. The default value is 75, which means that if the estimated specified task duration is 4 days then the optimistic duration will be 3 days.
     */
    public $optimistic;
	
    /*
     * The percentage of the most likely task duration which can happen in the worst possible project scenario. The default value is 125, which means that if the estimated specified task duration is 4 days then the pessimistic duration will be 5 days.
     */
    public $pessimistic;
	
    /*
     * Gets or sets the confidence level that correspond to the percentage of the time the actual generated values will be within optimistic and pessimistic estimates. The default value is CL99.
     */
    public $confidence_level;
	
    /*
     * The number of iterations to use in Monte Carlo simulation. The default value is 100.
     */
    public $iterations;
	
    /*
     * The document storage.
     */
    public $storage;
	
    /*
     * The folder storage.
     */
    public $folder;
	
    /*
     * The resulting report fileName.
     */
    public $file_name;
}