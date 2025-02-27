<?php

namespace demo\table;

use \koolreport\dashboard\Dashboard;

use \koolreport\dashboard\containers\Row;
use \koolreport\dashboard\containers\Panel;
use \koolreport\dashboard\widgets\Text;

class TableBoard extends Dashboard
{
    protected function widgets()
    {
        return [
            Panel::create()->type("primary")->header("Basic Columns")->sub([
                BasicColumnsTable::create()->lazyLoading(true)
            ]),
            Row::create()->sub([
                Panel::create()->type("warning")->header("Paginated Table")->width(1/2)->sub([
                    PaginatedTable::create()->lazyLoading(true)
                ]),
                Panel::create()->type("warning")->header("Styled Table")->width(1/2)->sub([
                    StyledTable::create()->lazyLoading(true),
                    Text::create()
                        ->text("<p><b>Note:</b> Show small table with light header, stripped rows, bordered, outlined and row hovering</p>")
                        ->asHtml(true),
                ]),
            ]),
            Row::create()->sub([
                Panel::create()->type("danger")->header("Show Footer & Column Aggregation")->width(1/2)->sub([
                    WithFooterTable::create()->lazyLoading(true)
                ]),
                Panel::create()->type("danger")->header("Align Column Text")->width(1/2)->sub([
                    ColumnAlignTable::create()->lazyLoading(true)
                ]),
            ]),
            Panel::create()->type("success")->header("Extra Columns")->sub([
                ExtraColumnsTable::create()->lazyLoading(true)
            ]),
        ];
    }
}