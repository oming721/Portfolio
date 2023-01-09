package com.example.bussystem

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.TextView

class MainActivity2 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main2)
        val intent = intent
        val date = intent.getStringExtra("date")
        val textcw = findViewById<TextView>(R.id.textcw)
        val textkkkl = findViewById<TextView>(R.id.textkkkl)


        var btn_cwlink = findViewById<Button>(R.id.cwlink)
        btn_cwlink.setOnClickListener{
            val intent = Intent(this, MainActivity4::class.java)
            intent.putExtra("date1",date.toString())
            intent.putExtra("cw1",textcw.text.toString())
            startActivity(intent)
        }




        var btn_kkkl = findViewById<Button>(R.id.kkkl)
        btn_kkkl.setOnClickListener{
            val intent = Intent(this, MainActivity5::class.java)
            intent.putExtra("date1",date.toString())
            intent.putExtra("kkkl1",textkkkl.text.toString())
            startActivity(intent)
        }
    }
}