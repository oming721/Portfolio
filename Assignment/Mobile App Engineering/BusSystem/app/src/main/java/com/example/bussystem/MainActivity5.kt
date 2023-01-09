package com.example.bussystem

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.TextView

class MainActivity5 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main5)
        val intent = intent
        val cdate = intent.getStringExtra("date1")
        val kkkl = intent.getStringExtra("kkkl1")

        val date = findViewById<TextView>(R.id.busdate)
        date.setText(cdate)

        val date1 = findViewById<TextView>(R.id.busdate1)
        date1.setText(cdate)

        val busname = findViewById<TextView>(R.id.busname)
        busname.setText(kkkl)
    }
}