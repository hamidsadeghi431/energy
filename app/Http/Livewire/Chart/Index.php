<?php

namespace App\Http\Livewire\Chart;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class Index extends Component
{
    public function render()
    {
        $columnChartModel = (new ColumnChartModel())
                            ->setTitle('Expenses by Type')
                            ->addColumn('Food', 100, '#f6ad55')
                            ->addColumn('Shopping', 200, '#fc8181')
                            ->addColumn('Travel', 300, '#90cdf4');
        $pieChartModel = (new PieChartModel())
            ->setTitle('Expenses by Type')
            ->addSlice('Food', 100, '#f6ad55')
            ->addSlice('Shopping', 200, '#fc8181')
            ->addSlice('Travel', 300, '#90cdf4');
        return view('livewire.chart.index')->with([
            'columnChartModel' => $columnChartModel,
            'pieChartModel' => $pieChartModel
        ]);
    }
}
