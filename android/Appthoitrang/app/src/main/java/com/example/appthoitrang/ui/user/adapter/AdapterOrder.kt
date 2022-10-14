package com.example.appthoitrang.ui.user.adapter

import com.example.appthoitrang.R
import com.example.appthoitrang.data.model.responses.Order
import com.example.appthoitrang.databinding.LayoutItemOrderBinding
import com.sangtb.androidlibrary.base.BaseRecyclerViewAdapter
import javax.inject.Inject

/*
* Copyright © 2022 UITS CO.,LTD
* Created by SangTB on 11/06/2022.
*/

class AdapterOrder @Inject constructor() : BaseRecyclerViewAdapter<Order,LayoutItemOrderBinding>(){
    override val layoutId: Int
        get() = R.layout.layout_item_order

    override fun onBindViewHolder(holder: BaseViewHolder<LayoutItemOrderBinding>, position: Int) {
        holder.binding.oder = items[position]
    }
}