                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CellarHub {{ date('Y') }}</div>
                            <div>
                                <a href="https://github.com/guilhermecostam/CellarHub">Github page</a>
                                &middot;
                                <a href="https://github.com/guilhermecostam/CellarHub/blob/main/LICENSE">License</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ mix('js/scripts.js') }}" defer></script>
        <script src="{{ mix('js/chart-area-demo.js') }}" defer></script>
        <script src="{{ mix('js/chart-bar-demo.js') }}" defer></script>
        <script src="{{ mix('js/datatables-demo.js') }}" defer></script>
    </body>
</html>