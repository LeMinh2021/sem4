package com.example.appthoitrang.ui.admin

import android.os.Bundle
import android.view.View
import androidx.fragment.app.viewModels
import com.example.appthoitrang.R
import com.example.appthoitrang.data.model.responses.DataProduct
import com.example.appthoitrang.databinding.FragmentProductBinding
import com.example.appthoitrang.ui.admin.adapter.ProductAdapter
import com.sangtb.androidlibrary.base.BaseFragment
import dagger.hilt.android.AndroidEntryPoint

@AndroidEntryPoint
class ProductFragment : BaseFragment<FragmentProductBinding, ProductViewModel>() {
    override val layoutId: Int
        get() = R.layout.fragment_product
    override val viewModel: ProductViewModel by viewModels()
    private val productAdapter = ProductAdapter()

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)
        binding.recyclerView.apply {
            adapter = productAdapter
        }
        viewModel.listDataProduct.observe(viewLifecycleOwner){
            productAdapter.updateItems(it as MutableList<DataProduct>)
        }
    }
}