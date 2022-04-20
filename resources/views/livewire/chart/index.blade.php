<div >
    <div class="space-y-4 sticky top-0 bg-white p-4 shadow z-50">
        <ul class="flex flex-col sm:flex-row sm:space-x-8 sm:items-center">
            <li>
                <input type="checkbox" value="travel" wire:model="types"/>
                <span>Travel</span>
            </li>
            <li>
                <input type="checkbox" value="shopping" wire:model="types"/>
                <span>Shopping</span>
            </li>
            <li>
                <input type="checkbox" value="food" wire:model="types"/>
                <span>Food</span>
            </li>
            <li>
                <input type="checkbox" value="entertainment" wire:model="types"/>
                <span>Entertainment</span>
            </li>
            <li>
                <input type="checkbox" value="other" wire:model="types"/>
                <span>Other</span>
            </li>
        </ul>

        <div>
            <input type="checkbox" value="other" wire:model="showDataLabels"/>
            <span>Show data labels</span>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6" style="height: 32rem;">
                <livewire:livewire-column-chart :column-chart-model="$columnChartModel"/>
            </div>
            <div class="col-6" style="height: 32rem;">
                <livewire:livewire-pie-chart :pie-chart-model="$pieChartModel"/>
            </div>
        </div>
    </div>
</div>
