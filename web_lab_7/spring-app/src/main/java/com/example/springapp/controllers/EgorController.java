package com.example.springapp.controllers;

import com.example.springapp.DTO.Message;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("api/v1/egor")
public class EgorController {

	@GetMapping
	public Message getSimpleMessage() {
		return new Message("Simple message");
	}

}
