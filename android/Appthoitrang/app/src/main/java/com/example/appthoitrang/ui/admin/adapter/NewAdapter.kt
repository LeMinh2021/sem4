package com.example.appthoitrang.ui.admin.adapter

import com.example.appthoitrang.R
import com.example.appthoitrang.data.model.responses.New
import com.example.appthoitrang.databinding.ItemNewsBinding
import com.sangtb.androidlibrary.base.BaseRecyclerViewAdapter
import javax.inject.Inject

class NewAdapter @Inject constructor() : BaseRecyclerViewAdapter<New, ItemNewsBinding>() {
    override fun onBindViewHolder(holder: BaseViewHolder<ItemNewsBinding>, position: Int) {
        holder.binding.news = items[position]
        holder.binding.root.setOnClickListener {
            listener?.invoke(
                holder.itemView,
                items[position],
                position
            )
        }
    }

    override val layoutId: Int
        get() = R.layout.item_news
}