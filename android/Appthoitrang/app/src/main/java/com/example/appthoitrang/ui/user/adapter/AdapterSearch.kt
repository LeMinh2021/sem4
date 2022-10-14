package com.example.appthoitrang.ui.user.adapter;

import com.example.appthoitrang.R
import com.example.appthoitrang.data.model.responses.ProductNew
import com.example.appthoitrang.databinding.ItemProductSearchBinding
import com.sangtb.androidlibrary.base.BaseRecyclerViewAdapter
import javax.inject.Inject

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 5/29/2022
*/

public class AdapterSearch @Inject constructor() : BaseRecyclerViewAdapter<ProductNew,ItemProductSearchBinding>() {
    override val layoutId: Int
        get() = R.layout.item_product_search

    override fun onBindViewHolder(holder: BaseViewHolder<ItemProductSearchBinding>, position: Int) {
        holder.binding.apply {
            val productNew = items[position]
            product = productNew

            root.setOnClickListener { listener?.invoke(it,productNew,position) }
        }
    }
}
