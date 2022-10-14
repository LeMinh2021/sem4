package com.example.appthoitrang.ui.admin

import android.app.Application
import com.example.appthoitrang.data.repository.Repository
import com.sangtb.androidlibrary.base.BaseViewModel
import dagger.hilt.android.lifecycle.HiltViewModel
import javax.inject.Inject

@HiltViewModel
class OrderStatusViewModel @Inject constructor(
    application: Application,
    private val repository: Repository
) : BaseViewModel(application) {

    val listDataOrderTransportting = repository.listDataOrderTransportting
    val listDataOrderApproving = repository.listDataOrderApproving
    val listDataOrderDeleted = repository.listDataOrderDeleted
    val listDataOrderSuccess = repository.listDataOrderSuccess
}