package com.example.appthoitrang.ui.user.adapter;

import com.example.appthoitrang.R
import com.example.appthoitrang.data.model.responses.Cart
import com.example.appthoitrang.databinding.ItemCartBinding
import com.example.appthoitrang.ui.user.interfaces.IActionItemAdapterCart
import com.sangtb.androidlibrary.base.BaseRecyclerViewAdapter
import javax.inject.Inject

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 5/29/2022
*/

public class RecyclerAdapterCart @Inject constructor() : BaseRecyclerViewAdapter<Cart,ItemCartBinding>() {
    override val layoutId: Int
        get() = R.layout.item_cart

    var action : IActionItemAdapterCart? = null

    override fun onBindViewHolder(holder: BaseViewHolder<ItemCartBinding>, position: Int) {
        holder.binding.cart = items[position]
        action?.let { holder.binding.action = it }
    }
}
