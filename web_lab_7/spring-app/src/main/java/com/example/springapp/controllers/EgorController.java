package com.example.springapp.controllers;

import com.example.springapp.DTO.Message;
import com.example.springapp.models.egor.Author;
import com.example.springapp.models.ira.Producers;
import com.example.springapp.repos.egor.AuthorRepo;
import lombok.AllArgsConstructor;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("api/v1/egor")
@AllArgsConstructor
public class EgorController {

	private final AuthorRepo authorRepo;

	@GetMapping
	public Message getSimpleMessage() {
		return new Message("Simple message");
	}


	@PostMapping("authors")
	public Author addProducer(@RequestBody Author author) {
		return authorRepo.save(author);
	}

	@GetMapping("authors")
	public List<Author> getAllProducers() {
		return authorRepo.findAll();
	}

	@GetMapping("authors/{id}")
	public Author findProducer(@PathVariable Long id) {
		return authorRepo.findById(id).orElseThrow(
				() -> new IllegalStateException(String.format("Author with id: %s does not exist", id))
		);
	}


}
