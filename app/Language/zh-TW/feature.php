<?php
    return [
        "lan" => [
            "navName"          => "特色",
            "title"    => "產品特色",
            "intro"  => "目前 CodeHawk 可以對使用 Java 程式語言所開發的專案進行靜態分析；未來 CodeHawk 將會有更多新的特性以及新的支援語言。 CodeHawk 可以偵測不同的壞氣味：",
            "collapse" => [
                [
                    "title" => "應用程式層級氣味",
                    "content" => "提供：重複程式碼、霰彈式修改、分散式修改，等偵測規則。"
                ],
                [
                    "title" => "類別層級氣味",
                    "content" => "提供：過大類別、功能依戀、資料類別、不適當的親密關係、拒絕的遺產、懶惰類別、資料泥團，等偵測規則。"
                ],
                [
                    "title" => "方法層級氣味",
                    "content" => "提供：過多參數、過長方法、著迷原生型態、選擇敘述，等偵測規則。"
                ]
            ]
        ]   
    ];
?>