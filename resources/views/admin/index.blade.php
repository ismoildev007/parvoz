<x-layouts.admin>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Kompaniya Hisobotlari</h1>
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group me-2" role="group">
                    <button type="button" class="btn btn-secondary" onclick="setPeriod('monthly')">Oylik</button>
                    <button type="button" class="btn btn-secondary" onclick="setPeriod('quarterly')">Kvartal</button>
                    <button type="button" class="btn btn-secondary" onclick="setPeriod('semi-annual')">Yarim Yillik</button>
                    <button type="button" class="btn btn-secondary" onclick="setPeriod('yearly')">Yillik</button>
                </div>
                <div class="btn-group ms-2" role="group">
                    <select id="chartType" class="form-select" onchange="changeChartType();">
                        <option value="line" {{ request('chartType', 'line') === 'line' ? 'selected' : '' }}>Chiziqli Diagramma</option>
                        <option value="bar" {{ request('chartType') === 'bar' ? 'selected' : '' }}>Barda Diagramma</option>
                        <option value="radar" {{ request('chartType') === 'radar' ? 'selected' : '' }}>Radar Diagramma</option>
                        <option value="pie" {{ request('chartType') === 'pie' ? 'selected' : '' }}>Doira Diagramma</option>
                        <option value="doughnut" {{ request('chartType') === 'doughnut' ? 'selected' : '' }}>Qovurdoq Diagramma</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Bo'lim va davr filtri -->
        <form id="filterForm" action="{{ route('admin') }}" method="GET" class="row g-3 mb-5">
            <div class="col-md-6">
                <div class="form-floating">
                    <select id="department_id" name="department_id" class="form-select" onchange="document.getElementById('filterForm').submit();">
                        <option value="">Barcha Bo'limlar</option>
                        {{-- @foreach($departments as $department) --}}
                        {{-- <option value="{{ $department->id }}" {{ request('department_id') == $department->id ? 'selected' : '' }}> --}}
                        {{-- {{ $department->name }} --}}
                        {{-- </option> --}}
                        {{-- @endforeach --}}
                    </select>
                    <label for="department_id">Bo'limni Tanlang</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <select id="period" name="period" class="form-select" onchange="document.getElementById('filterForm').submit();">
                        <option value="monthly" {{ request('period') == 'monthly' ? 'selected' : '' }}>Oylik</option>
                        <option value="quarterly" {{ request('period') == 'quarterly' ? 'selected' : '' }}>Kvartal</option>
                        <option value="semi-annual" {{ request('period') == 'semi-annual' ? 'selected' : '' }}>Yarim Yillik</option>
                        <option value="yearly" {{ request('period') == 'yearly' ? 'selected' : '' }}>Yillik</option>
                    </select>
                    <label for="period">Davrni Tanlang</label>
                </div>
            </div>
        </form>

        <!-- Diagramma uchun konteyner -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <canvas id="reportChart" width="400" height="150"></canvas>
            </div>
        </div>

        <!-- Chart.js kutubxonasini qo'shish -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Dummy data for demonstration purposes
            const labels = ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avgust', 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr'];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Savdo Hisobotlari',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
                }]
            };

            const config = {
                type: '{{ request('chartType', 'line') }}',
                data: data,
                options: {}
            };

            var reportChart = new Chart(
                document.getElementById('reportChart'),
                config
            );

            function setPeriod(period) {
                document.getElementById('period').value = period;
                document.getElementById('filterForm').submit();
            }

            function changeChartType() {
                const chartType = document.getElementById('chartType').value;
                reportChart.destroy();
                reportChart = new Chart(document.getElementById('reportChart'), {
                    type: chartType,
                    data: data,
                    options: {}
                });
            }
        </script>
    </div>
</x-layouts.admin>
