<?php

namespace PhpOffice\PhpSpreadsheetPerformance\Writer\Xls;

use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheetPerformance\Writer\AbstractBasicWriter;

class XlxWriterLargeBenchmark extends AbstractBasicWriter
{
    public function __construct()
    {
        parent::__construct(128, 8192);
    }

    /**
     * @var string
     */
    protected $fileName = 'performanceTestWrite.xls';

    /**
     * @Groups({"slow"})
     * @revs(3)
     * @Iterations(5)
     * @OutputTimeUnit("seconds")
     * @AfterMethods("tearDown")
     */
    public function benchmarkLargeXlsWriter(): void
    {
        $writer = new Xls($this->spreadsheet);
        $writer->save($this->fileName);
    }
}
