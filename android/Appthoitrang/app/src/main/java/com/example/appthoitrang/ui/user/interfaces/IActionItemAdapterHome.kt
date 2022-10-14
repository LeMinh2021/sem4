package com.example.appthoitrang.ui.user.interfaces;

import com.example.appthoitrang.data.model.responses.ProductNew

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 5/19/2022
*/
interface IActionItemAdapterHome {
    fun onClickBuyCart(productNew: ProductNew)
    fun onClickDetail(productNew: ProductNew)
}
