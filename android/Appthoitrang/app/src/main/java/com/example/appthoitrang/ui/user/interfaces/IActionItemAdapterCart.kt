package com.example.appthoitrang.ui.user.interfaces

import com.example.appthoitrang.data.model.responses.Cart

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 6/5/2022
*/

interface IActionItemAdapterCart {
    fun plus(cart: Cart)
    fun minus(cart: Cart)
    fun remove(cart: Cart)
}